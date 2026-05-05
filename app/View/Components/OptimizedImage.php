<?php

namespace App\View\Components;

use App\Models\ImageOptimization;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Component;

class OptimizedImage extends Component
{
    public function __construct(
        public ?string $src = null,
        public ?string $originalSrc = null,
        public ?string $alt = '',
        public ?string $class = '',
        public ?int $width = null,
        public ?int $height = null,
        public bool $lazy = true,
        public bool $eager = false,
        public ?string $sizes = null,
        public ?string $loading = null,
        public ?string $style = null,
        public bool $pictureTag = false,
        public ?string $fallbackSrc = null,
    ) {}

    public function render(): View|Closure|string
    {
        if (! $this->src && ! $this->originalSrc) {
            return '';
        }

        $optimization = $this->getOptimization();
        $srcset = $this->generateSrcset($optimization);
        $mainSrc = $this->getMainSrc($optimization);

        if ($this->pictureTag) {
            return $this->renderPictureTag($mainSrc, $srcset);
        }

        return $this->renderImgTag($mainSrc, $srcset);
    }

    private function getOptimization(): ?ImageOptimization
    {
        if (! $this->originalSrc) {
            return null;
        }

        $path = $this->extractPathFromUrl($this->originalSrc);

        return ImageOptimization::where(function ($query) use ($path) {
            $query->where('original_path', 'like', '%'.$path)
                ->orWhere('original_path', $path);
        })->completed()->first();
    }

    private function extractPathFromUrl(string $url): string
    {
        if (str_starts_with($url, '/')) {
            $url = request()->getHost().$url;
        }

        $parsed = parse_url($url);

        return ltrim($parsed['path'] ?? '', '/');
    }

    private function generateSrcset(?ImageOptimization $optimization): ?string
    {
        if (! $optimization) {
            return null;
        }

        $srcset = [];
        $baseUrl = Storage::disk('public')->url('');

        if ($optimization->thumbnail_300) {
            $srcset[] = $baseUrl.ltrim($optimization->thumbnail_300, '/').' 300w';
        }

        if ($optimization->thumbnail_600) {
            $srcset[] = $baseUrl.ltrim($optimization->thumbnail_600, '/').' 600w';
        }

        if ($optimization->thumbnail_1200) {
            $srcset[] = $baseUrl.ltrim($optimization->thumbnail_1200, '/').' 1200w';
        }

        return ! empty($srcset) ? implode(', ', $srcset) : null;
    }

    private function getMainSrc(?ImageOptimization $optimization): string
    {
        if ($optimization && $optimization->optimized_path) {
            return Storage::disk('public')->url($optimization->optimized_path);
        }

        if ($this->src) {
            return $this->src;
        }

        if ($this->originalSrc) {
            if (str_starts_with($this->originalSrc, '/')) {
                return asset($this->originalSrc);
            }

            return $this->originalSrc;
        }

        return $this->fallbackSrc ?? '';
    }

    private function renderImgTag(string $src, ?string $srcset): string
    {
        $attributes = $this->buildAttributes($src, $srcset);

        return "<img {$attributes}>";
    }

    private function renderPictureTag(string $src, ?string $srcset): string
    {
        $webpSrc = $this->getWebpSrc($src);

        $fallbackTag = $this->renderImgTag($src, null);

        if ($webpSrc === $src) {
            return $fallbackTag;
        }

        return <<<HTML
<picture>
    <source srcset="{$webpSrc}" type="image/webp" {$this->getSourceSrcset($srcset)}>
    {$fallbackTag}
</picture>
HTML;
    }

    private function getWebpSrc(string $src): string
    {
        $pathInfo = pathinfo($src);

        if (isset($pathInfo['extension']) && in_array(strtolower($pathInfo['extension']), ['jpg', 'jpeg', 'png'])) {
            return $pathInfo['dirname'].'/'.$pathInfo['filename'].'.webp';
        }

        return $src;
    }

    private function getSourceSrcset(?string $srcset): string
    {
        if (! $srcset) {
            return '';
        }

        $webpSrcset = str_replace(['.jpg', '.jpeg', '.png'], '.webp', $srcset);

        return 'srcset="'.$webpSrcset.'"';
    }

    private function buildAttributes(string $src, ?string $srcset): string
    {
        $attrs = [];

        $attrs[] = 'src="'.e($src).'"';
        $attrs[] = 'alt="'.e($this->alt ?? '').'"';

        if ($srcset) {
            $attrs[] = 'srcset="'.e($srcset).'"';
        }

        if ($this->sizes) {
            $attrs[] = 'sizes="'.e($this->sizes).'"';
        }

        $loading = $this->loading ?? ($this->lazy ? 'lazy' : ($this->eager ? 'eager' : 'lazy'));
        $attrs[] = 'loading="'.$loading.'"';

        if ($this->width) {
            $attrs[] = 'width="'.$this->width.'"';
        }

        if ($this->height) {
            $attrs[] = 'height="'.$this->height.'"';
        }

        if ($this->class) {
            $attrs[] = 'class="'.e($this->class).'"';
        }

        if ($this->style) {
            $attrs[] = 'style="'.e($this->style).'"';
        }

        $attrs[] = 'decoding="async';

        return implode(' ', $attrs);
    }
}

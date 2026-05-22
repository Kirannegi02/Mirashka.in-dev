{{-- FAQ UI style 1: dashed-border answers (home page / type_one) --}}
@php
    $items = $items ?? [];
    $accordionId = $accordionId ?? 'faq-dashed-'.uniqid();
@endphp

<div class="faq_section type_one mirashka-faq-dashed" id="{{ $accordionId }}">
    <div class="block_faq">
        <div class="accordion">
            <dl>
                @foreach($items as $index => $item)
                    <dt class="faq_header {{ $index === 0 ? 'active' : '' }}">
                        <span class="icon-play"></span> {{ $item['question'] }}
                    </dt>
                    <dd class="accordion-content hide" @if($index === 0) style="display: block;" @endif>
                        <p>{{ $item['answer'] }}</p>
                    </dd>
                @endforeach
            </dl>
        </div>
    </div>
</div>

@once
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.mirashka-faq-dashed .accordion dl').forEach(function (dl) {
                var dts = dl.querySelectorAll('dt');
                var dds = dl.querySelectorAll('dd');
                dds.forEach(function (dd, i) {
                    if (i > 0) {
                        dd.style.display = 'none';
                        dd.classList.add('hide');
                    }
                });
                dts.forEach(function (dt) {
                    dt.addEventListener('click', function () {
                        dts.forEach(function (el) { el.classList.remove('active'); });
                        dt.classList.add('active');
                        dds.forEach(function (dd) {
                            dd.style.display = 'none';
                            dd.classList.add('hide');
                        });
                        var next = dt.nextElementSibling;
                        if (next && next.tagName === 'DD') {
                            next.style.display = 'block';
                            next.classList.remove('hide');
                        }
                    });
                });
            });
        });
    </script>
    @endpush
@endonce

{{-- FAQ UI style 2: boxed headers (type_two) --}}
@php
    $items = $items ?? [];
    $accordionId = $accordionId ?? 'faq-boxed-'.uniqid();
@endphp

<div class="faq_section type_two mirashka-faq-boxed" id="{{ $accordionId }}">
    <div class="block_faq">
        <div class="accordion">
            @foreach($items as $index => $item)
                <dt class="faq_header {{ $index === 0 ? 'active' : '' }}">
                    <span class="icon-play"></span> {{ $item['question'] }}
                </dt>
                <dd class="accordion-content {{ $index === 0 ? '' : 'hide' }}" @if($index === 0) style="display: block;" @endif>
                    <p>{{ $item['answer'] }}</p>
                </dd>
            @endforeach
        </div>
    </div>
</div>

@once
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.mirashka-faq-boxed .accordion').forEach(function (accordion) {
                var dts = accordion.querySelectorAll('dt.faq_header');
                var dds = accordion.querySelectorAll('dd.accordion-content');
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

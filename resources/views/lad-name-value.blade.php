<?php
/**
 * @author Jonathon Wallen
 * @date 28/6/17
 * @time 9:51 AM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */
?>

<div class="page-section--highlights">

    <h3>Highlights</h3>

    <div class="repeatables-container  highlights__list">

        <div class="repeatables-list">
            <!-- If the section has data, create a 'carousel-item' for each -->
            @if($section->data)
                @foreach($section->data as $slide)
                    @include('lad-name-value::lad-name-value-item', ['key' => $loop->index, 'sectionId' => $section->id])
                @endforeach
            @endif
        </div>

        <button type="button" class="repeatables-add  btn  btn-default">
            <svg class="icon icon-plus-circle"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-plus-circle"></use></svg>
            Add highlight
        </button>

        <script class="repeatables-template" type="text\plain">
            @include('lad-name-value::lad-name-value-item', ['key' => 0, 'sectionId' => $section->id])
        </script>
    </div>

</div>

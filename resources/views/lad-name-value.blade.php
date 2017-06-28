<?php
/**
 * @author Jonathon Wallen
 * @date 28/6/17
 * @time 9:51 AM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */
?>
<div class="panel  panel__full">
    <div class="panel__inner">
        <div class="panel__row">
            <div class="panel__full">
                <h4>{{ $section->label }} name</h4>
            </div>
            <div class="panel__full">
                <fieldset class="{{ $errors->has('sections.' . $section->id . '.data.0.name') ? 'error' : '' }}">
                    {!! Form::text( 'sections[' . $section->id . '][data][0][name]', $section->data[0]['name']) !!}
                    <div class="form__error">{{ $errors->first('sections.' . $section->id . '.data.0.name') }}</div>
                </fieldset>
            </div>
        </div>

        <div class="panel__row">
            <div class="panel__full">
                <h4>{{ $section->label }} value</h4>
            </div>
            <div class="panel__full">
                <fieldset class="{{ $errors->has('sections.' . $section->id . '.data.0.value') ? 'error' : '' }}">
                    {!! Form::text( 'sections[' . $section->id . '][data][0][value]', $section->data[0]['value']) !!}
                    <div class="form__error">{{ $errors->first('sections.' . $section->id . '.data.0.value') }}</div>
                </fieldset>
            </div>
        </div>
    </div>
</div>


<?php
/**
 * @author Jonathon Wallen
 * @date 28/6/17
 * @time 9:51 AM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */
?>

<div class="highlights">

    <h3>Highlights</h3>

    <div class="highlights__list">
        <!-- Highlight block START -->
        <div class="highlight  panel  panel-default">
            <div class="panel-body">

                <button type="button" class="close  pull-right" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <h4>Highlight</h4>

                <div class="form-group  clearfix">
                    <fieldset class="{{ $errors->has('sections.' . $section->id . '.data.0.description') ? 'error' : '' }}">
                        <label for="highlight-description-{{ $section->id }}">Description</label>
                        {!! Form::text( 'sections[' . $section->id . '][data][0][description]', $section->data[0]['description'], array('id' => 'highlight-description-' . $section->id, 'class' => 'form-control')) !!}
                        <div class="form__error">{{ $errors->first('sections.' . $section->id . '.data.0.description') }}</div>
                    </fieldset>
                </div>

                <div class="form-group">
                    <fieldset class="{{ $errors->has('sections.' . $section->id . '.data.0.value') ? 'error' : '' }}">
                        <label for="highlight-value-{{ $section->id }}">Value</label>
                        {!! Form::text( 'sections[' . $section->id . '][data][0][value]', $section->data[0]['value'], array('id' => 'highlight-value-' . $section->id, 'class' => 'form-control')) !!}
                        <div class="form__error">{{ $errors->first('sections.' . $section->id . '.data.0.value') }}</div>
                    </fieldset>
                </div>

                <div class="form-group">
                    <fieldset class="{{ $errors->has('sections.' . $section->id . '.data.0.unit') ? 'error' : '' }}">
                        <label for="highlight-unit-{{ $section->id }}">Unit</label>
                        {!! Form::text( 'sections[' . $section->id . '][data][0][unit]', $section->data[0]['unit'], array('id' => 'highlight-unit-' . $section->id, 'class' => 'form-control')) !!}
                        <div class="form__error">{{ $errors->first('sections.' . $section->id . '.data.0.unit') }}</div>
                    </fieldset>
                </div>

                <div class="form-group">
                    <fieldset class="{{ $errors->has('sections.' . $section->id . '.data.0.icon') ? 'error' : '' }}">
                        <label for="highlight-icon-{{ $section->id }}">Icon</label>
                        {!! Form::text( 'sections[' . $section->id . '][data][0][icon]', $section->data[0]['icon'], array('id' => 'highlight-icon-' . $section->id, 'class' => 'form-control')) !!}
                        <div class="form__error">{{ $errors->first('sections.' . $section->id . '.data.0.icon') }}</div>
                        <span id="" class="help-block">
                            The name of the font-awesome icon that should show for this highlight, e.g. 'ticket'.
                        </span>
                    </fieldset>
                </div>
            </div>
        </div>
        <!-- Highlight block END -->
    </div>

    <button type="button" class="btn btn-default">Add highlight</button>

</div>
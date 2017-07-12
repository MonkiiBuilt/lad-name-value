<!-- Repeatable Highlight block START -->
<div class="repeatables-item  highlight  panel  panel-default">
    <div class="panel-body">

        <button type="button" class="repeatables-remove  close  pull-right" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4>Highlight</h4>

        <!-- Description -->
        <div class="form-group  clearfix">
            <fieldset class="{{ $errors->has('sections.' . $sectionId . '.data.' . $key . '.description') ? 'error' : '' }}">
                <label for="sections[{{ $sectionId }}][data][{{ $key }}][description]">Description</label>
                {!! Form::text('sections[' . $sectionId . '][data][' . $key . '][description]', $section->data[$key]['description'], array('id' => 'sections[' . $sectionId . '][data][' . $key . '][description]', 'class' => 'form-control')) !!}
                <div class="form__error">{{ $errors->first('sections.' . $sectionId . '.data.' . $key . '.description') }}</div>
            </fieldset>
        </div>

        <!-- Value -->
        <div class="form-group">
            <fieldset class="{{ $errors->has('sections.' . $sectionId . '.data.' . $key . '.value') ? 'error' : '' }}">
                <label for="sections[{{ $sectionId }}][data][{{ $key }}][value]">Value</label>
                {!! Form::text('sections[' . $sectionId . '][data][' . $key . '][value]', $section->data[$key]['value'], array('id' => 'sections[' . $sectionId . '][data][' . $key . '}}][value]', 'class' => 'form-control')) !!}
                <div class="form__error">{{ $errors->first('sections.' . $sectionId . '.data.' . $key . '.value') }}</div>
            </fieldset>
        </div>

        <!-- Unit -->
        <div class="form-group">
            <fieldset class="{{ $errors->has('sections.' . $sectionId . '.data.' . $key . '.unit') ? 'error' : '' }}">
                <label for="sections[{{ $sectionId }}][data][{{ $key }}][unit]">Unit</label>
                {!! Form::text('sections[' . $sectionId . '][data][' . $key . '}}][unit]', $section->data[$key]['unit'], array('id' => 'sections[' . $sectionId . '][data][' . $key . '][unit]', 'class' => 'form-control')) !!}
                <div class="form__error">{{ $errors->first('sections.' . $sectionId . '.data.' . $key . '.unit') }}</div>
            </fieldset>
        </div>

        <!-- Icon -->
        <div class="form-group">
            <fieldset class="{{ $errors->has('sections.' . $sectionId . '.data.' . $key . '.icon') ? 'error' : '' }}">
                <label for="sections[{{ $sectionId }}][data][{{ $key }}][icon]">Icon</label>
                {!! Form::text('sections[' . $sectionId . '][data][' . $key . '][icon]', $section->data[$key]['icon'], array('id' => 'sections[' . $sectionId . '][data][' . $key . '}}][icon]', 'class' => 'form-control')) !!}
                <div class="form__error">{{ $errors->first('sections.' . $sectionId . '.data.' . $key . '.icon') }}</div>
                <span id="" class="help-block">
                    The name of the font-awesome icon that should show for this highlight, e.g. 'ticket'.
                </span>
            </fieldset>
        </div>
    </div>
</div>
<!-- Repeatable Highlight block END -->
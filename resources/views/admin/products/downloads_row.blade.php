<tr data-index="{{ $index }}">
    <td>{!! Form::text('downloads['.$index.'][link]', old('downloads['.$index.'][link]', isset($field) ? $field->link: ''), ['class' => 'form-control']) !!}</td>

    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('quickadmin.qa_delete')</a>
    </td>
</tr>
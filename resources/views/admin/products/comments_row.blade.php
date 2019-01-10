<tr data-index="{{ $index }}">
    <td>{!! Form::text('comments['.$index.'][description]', old('comments['.$index.'][description]', isset($field) ? $field->description: ''), ['class' => 'form-control']) !!}</td>

    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('quickadmin.qa_delete')</a>
    </td>
</tr>
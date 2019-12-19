
<?php

function get_filtered_input($form)
{
    $filter_params = [];
    foreach ($form['fields'] as $field_name => $field) {
        $filter_params[$field_name] = FILTER_SANITIZE_SPECIAL_CHARS;
        if (isset($field_value['filter'])) {
            $filter_params[$field_name] = $field_name['filter'];
        } else {
            $filter_params[$field_name] = FILTER_SANITIZE_FULL_SPECIAL_CHARS;
        }
    }

    return filter_input_array(INPUT_POST, $filter_params);
}


function fill_form(&$form, $input)
{
    foreach ($input as $field_index => $field_value) {
        $form['fields'][$field_index]['value'] = $field_value;
    }

}

function validate_form(&$form, $input)
{
    $success = true;
    foreach ($form['fields'] as $field_id => &$field) {
        $field_value = $input[$field_id];
        $field['value'] = $field_value;
//        validate_field_not_empty($input[$field_id], $field);
        if (isset($field['validators'])) {
            foreach ($field['validators'] as $validator) {
                $is_valid = $validator($field_value, $field);
                if (!$is_valid) {
                    $success = false;
                    break;
                }
            }

        }
    }
    if (isset($form['callbacks'])) {
        $cb_index = $success ? 'success' : 'fail';
        $function = $form['callbacks'][$cb_index] ?? false;
        if ($function) {
            $function($form, $input);
        }
    }
    return $success;
}

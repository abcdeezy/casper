<?php
function input_field($type, $name, $placeholder = '', $value = '') {
    return "<input type='$type' name='$name' placeholder='$placeholder' value='$value' class='w-full p-2 border rounded mb-3'>";
}

function submit_button($label = 'Submit') {
    return "<button type='submit' class='bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded'>$label</button>";
}

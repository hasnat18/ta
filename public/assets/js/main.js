// multipleselect js
mobiscroll.select('#multiple-select', {
    inputElement: document.getElementById('my-input'),
    touchUi: false
});

$('#teacher').hide();
$('#student').hide();

$('#type').change(() => {
    var selected = $( "#type option:selected" ).val();
    if(selected == 'teacher')
    {
        $('#teacher').show();
        $('#student').hide();
    }
    else if (selected == 'student')
    {
        $('#teacher').hide();
        $('#student').show();
    }
});

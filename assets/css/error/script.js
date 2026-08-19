// reference: https://jsfiddle.net/qCn6p/208/

function formatText (icon) {
    return $('<span><i class="fas ' + $(icon.element).data('icon') + '"></i> ' + icon.text + '</span>');
};

$('.select2-icon').select2({
    width: "50%",
    templateSelection: formatText,
    templateResult: formatText
});
$(function(){
    // Menú.
    var $a = $(`aside a[href$='` + location.pathname +`']`);
    $a.addClass('text-gray-800 dark:text-gray-100');

    var $li = $a.parents('li');
    $borderedBlueForLi = $(`<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>`);
    $li.prepend($borderedBlueForLi);

    
});
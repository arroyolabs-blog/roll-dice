function getAjaxDiceRequest(){
    $.get('ajax/dice', function(data, status){
        $('#diceImg').attr('src','/images/dice/'+ data.body.result + '.png');
        $('#diceContainer').show();
    });
    console.log('call made');
};
function getDiceRequest(){
    window.location.href = '/dicerequest';
}
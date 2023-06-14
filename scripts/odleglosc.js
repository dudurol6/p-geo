function distance(){

    var x_1 = Number(document.getElementById('coord-X1').value);
    var y_1 = Number(document.getElementById('coord-Y1').value);
    var x_2 = Number(document.getElementById('coord-X2').value);
    var y_2 = Number(document.getElementById('coord-Y2').value);

    var deltaX = x_2 - x_1;
    var deltaY = y_2 - y_1;

    var distance = Math.sqrt(deltaX**2 + deltaY**2);
    var correct = true;

    var result = distance;

    if(distance <= 0 || !distance) correct = false;

    if(correct){
        $('#result').css('display', 'block');
        $('#result').html('Odległość = '+result.toFixed(2)+'');
        
        localStorage.setItem('distanceHistory'+whatsNewValueForHistory('distanceHistory')+'', result.toFixed(2)+' <span style="text-transform: none;">m</span>');
        returnHistory('distanceHistory');
    }
    else{
        $('#result').css('display', 'block');
        $('#result').html('BŁĄD!');
    }

}
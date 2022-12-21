function linearIndentation(){

    var x_a = Number(document.getElementById('XA').value);
    var y_a = Number(document.getElementById('YA').value);
    var x_b = Number(document.getElementById('XB').value);
    var y_b = Number(document.getElementById('YB').value);
    var distance_a = Number(document.getElementById('distance-a').value);
    var distance_b = Number(document.getElementById('distance-b').value);

    var distance_c = Math.sqrt((x_b - x_a)**2 + (y_b - y_a)**2);

    var Ca = distance_b**2 + distance_c**2 - distance_a**2;
    var Cb = distance_c**2 + distance_a**2 - distance_b**2;
    var Cc = distance_b**2 + distance_a**2 - distance_c**2;
    var p4 = Math.sqrt(Ca*Cb + Ca*Cc + Cb*Cc);
        
    var resultX = ((x_a * Cb - y_a * (-p4) + x_b * Ca - y_b * p4) / (Ca + Cb));
    var resultY = ((x_a * (-p4) + y_a * Cb + x_b * p4 + y_b * Ca) / (Ca + Cb));

    if(x_a && x_b && y_a && y_b && distance_a && distance_b){
        $('#result').css('display', 'block');
        $('#result').html('X<sub>P</sub> = '+resultX.toFixed(2)+'  Y<sub>P</sub> = '+resultY.toFixed(2)+'');
    }
    else{
        $('#result').css('display', 'block');
        $('#result').html('BŁĄD!');
    }

}
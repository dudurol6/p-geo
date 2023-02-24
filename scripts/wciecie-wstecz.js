function backIndentation(){

    var x_a = Number(document.getElementById('XA').value);
    var y_a = Number(document.getElementById('YA').value);
    var x_b = Number(document.getElementById('XB').value);
    var y_b = Number(document.getElementById('YB').value);
    var x_c = Number(document.getElementById('XC').value);
    var y_c = Number(document.getElementById('YC').value);
    var dir_a = Number(document.getElementById('dir-A').value);
    var dir_b = Number(document.getElementById('dir-B').value);
    var dir_c = Number(document.getElementById('dir-C').value);

    var deltaX_AB = x_b - x_a;
    var deltaY_AB = y_b - y_a;
    var deltaX_AC = x_c - x_a;
    var deltaY_AC = y_c - y_a;

    var ctgAlpha1 = 1/Math.tan((dir_b - dir_a) * Math.PI / 200);
    var ctgAlpha2 = 1/Math.tan((dir_c - dir_a) * Math.PI / 200);

    var _F0 = (deltaX_AB * 1 - deltaY_AB * ctgAlpha1 + deltaX_AC * (-1) - deltaY_AC * (-ctgAlpha2)) / (deltaX_AB * ctgAlpha1 + deltaY_AB * 1 + deltaX_AC * (-ctgAlpha2) + deltaY_AC * (-1));
    var f1 = deltaX_AB * 1 - deltaY_AB * ctgAlpha1;
    var f2 = deltaX_AB * ctgAlpha1 + deltaY_AB * 1;

    var deltaX_AP = (f1 * 1 - f2 * _F0) / (_F0**2 + 1**2);
    var deltaY_AP = -_F0 * deltaX_AP;

    var resultX = x_a + deltaX_AP;
    var resultY = y_a + deltaY_AP; 

    if((x_a != x_c || y_a != y_c) && (dir_a != dir_b && dir_a != dir_c && dir_b != dir_c)){
        $('#result').css('display', 'block');
        $('#result').html('X<sub>P</sub> = '+resultX.toFixed(2)+'  Y<sub>P</sub> = '+resultY.toFixed(2)+'');

        var toHistory = ' X:'+resultX.toFixed(2)+'  Y:'+resultY.toFixed(2)+'';
        localStorage.setItem('backIndentationHistory'+whatsNewValueForHistory('backIndentationHistory')+'', toHistory);
        returnHistory('backIndentationHistory');
    }
    else{
        $('#result').css('display', 'block');
        $('#result').html('BŁĄD!');
    }

}
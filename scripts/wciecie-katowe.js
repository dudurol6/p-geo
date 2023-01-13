function angularIndentation(){

        var x_a = document.getElementById('XA').value;
        var y_a = document.getElementById('YA').value;
        var x_b = document.getElementById('XB').value;
        var y_b = document.getElementById('YB').value;
        var angleAlpha = document.getElementById('angle-alpha').value;
        var angleBeta = document.getElementById('angle-beta').value;
        
        var f1 = x_a * 1/Math.tan(angleBeta * Math.PI / 200) - y_a * (-1) + x_b * 1/Math.tan(angleAlpha * Math.PI / 200) - y_b * 1;
        var f2 = x_a * (-1) + y_a * 1/Math.tan(angleBeta * Math.PI / 200) + x_b * 1 + y_b * 1/Math.tan(angleAlpha * Math.PI / 200);

        var resultX = f1 / (1/Math.tan(angleAlpha * Math.PI / 200) + 1/Math.tan(angleBeta * Math.PI / 200));
        var resultY = f2 / (1/Math.tan(angleAlpha * Math.PI / 200) + 1/Math.tan(angleBeta * Math.PI / 200));

        if((angleAlpha > 0 && angleAlpha <= 200) && (angleBeta > 0 && angleBeta <= 200)){
            $('#result').css('display', 'block');
            $('#result').html('X<sub>P</sub> = '+resultX.toFixed(2)+'  Y<sub>P</sub> = '+resultY.toFixed(2)+'');
        }
        else{
            $('#result').css('display', 'block');
            $('#result').html('BŁĄD!');
        }

}
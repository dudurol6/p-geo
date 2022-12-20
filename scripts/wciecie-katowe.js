function angularIndentation(){

        var x_a = document.getElementById('XA').value;
        var y_a = document.getElementById('YA').value;
        var x_b = document.getElementById('XB').value;
        var y_b = document.getElementById('YB').value;
        var angleAlpha = document.getElementById('angle-alpha').value;
        var angleBeta = document.getElementById('angle-beta').value;
        
        var f1 = x_a * 1/Math.tan(angleBeta * Math.PI / 200) - y_a * (-1) + x_b * 1/Math.tan(angleAlpha * Math.PI / 200) - y_b * 1;
        var f2 = x_a * (-1) + y_a * 1/Math.tan(angleBeta * Math.PI / 200) + x_b * 1 + y_b * 1/Math.tan(angleAlpha * Math.PI / 200);

        var resultX = (f1 / (1/Math.tan(angleAlpha * Math.PI / 200) + 1/Math.tan(angleBeta * Math.PI / 200))).toFixed(2);
        var resultY = (f2 / (1/Math.tan(angleAlpha * Math.PI / 200) + 1/Math.tan(angleBeta * Math.PI / 200))).toFixed(2);

        if(x_a && x_b && y_a && y_b && angleAlpha && angleBeta){
            $('#result').css('display', 'block');
            $('#result').html('X<sub>P</sub> = '+resultX+'  Y<sub>P</sub> = '+resultY+'');
        }
        else{
            $('#result').css('display', 'block');
            $('#result').html('BŁĄD!');
        }

}
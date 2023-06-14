function surfaceArea(val, No){

    if(val == 'num'){
        var coordNo = Number(document.getElementById('coordNo').value);

        if(coordNo <= 2){
            $('#result').css('display', 'block');
            $('#result').html('<span style="text-transform: none;">Potrzeba minimum 3 punktów!</span>');
        }
        else{
            $('#result').css('display', 'none');
            var areaContent = '';
            for(var i = 1; i <= coordNo; i++){
                areaContent = areaContent + `
                    <label for="coord-X`+i+`" class="calc-form-area-label">Współrzędna X<sub>`+i+`</sub></label>
                    <input type="number" name="coord-X`+i+`" id="coord-X`+i+`" class="calc-form-area">

                    <label for="coord-Y`+i+`" class="calc-form-area-label">Współrzędna Y<sub>`+i+`</sub></label>
                    <input type="number" name="coord-Y`+i+`" id="coord-Y`+i+`" class="calc-form-area">
                `
            }

            $('#polCalcArea').html(`
                `+areaContent+`
                <input type="submit" name="submit" value="Oblicz" class="calc-form-submit-button" onclick="surfaceArea('calc', `+coordNo+`)">
                <div id="result"></div>  
            `);
            document.getElementById('row>column').style.flexDirection = 'column';
        }
        
    }

    else if(val == 'calc'){
        var coordNo = No;
        var coordNoCopy = No;
        var x = [];
        var y = [];

        for(coordNoCopy; coordNoCopy > 0; coordNoCopy --){
            x[coordNoCopy] = Number(document.getElementById('coord-X'+coordNoCopy+'').value);
            y[coordNoCopy] = Number(document.getElementById('coord-Y'+coordNoCopy+'').value);
        }
    
        var doubleOutputY = 0;
        var doubleOutputX = 0;

        for(var i = 1; i <= coordNo; i++){
            if(coordNo - i == 1) doubleOutputY = doubleOutputY + (y[i+1] * ((x[1]) - (x[i])));
            else if(coordNo - i == 0) doubleOutputY = doubleOutputY + (y[1] * ((x[2]) - (x[i])));
            else doubleOutputY = doubleOutputY + (y[i+1] * ((x[i+2]) - (x[i])));

            if(coordNo - i == 1) doubleOutputX = doubleOutputX + (y[i+1] * ((x[1]) - (x[i])));
            else if(coordNo - i == 0) doubleOutputX = doubleOutputX + (y[1] * ((x[2]) - (x[i])));
            else doubleOutputX = doubleOutputX + (y[i+1] * ((x[i+2]) - (x[i])));
        }

        if(Math.abs(doubleOutputX) == Math.abs(doubleOutputY)) var output = Math.abs(((doubleOutputX + doubleOutputY) / 2) / 2).toFixed(2);

        $('#result').css('display', 'block');
        if(output == 0) $('#result').html('Błąd!');
        else{

            $('#result').html(`
                Pole = <br>
                `+output+` <span style="text-transform: none;">m<sup>2</sup></span> <br>
                `+(output/100).toFixed(2)+` <span style="text-transform: none;">a</span> <br>
                `+(output/10000).toFixed(2)+` <span style="text-transform: none;">ha</span>
            `);

            localStorage.setItem('surfaceAreaHistory'+whatsNewValueForHistory('surfaceAreaHistory')+'', output+' <span style="text-transform: none;">m<sup>2</sup></span>');
            returnHistory('surfaceAreaHistory');

        }
    }

}
function whatsNewValueForHistory(type){
    for(var i = 1; i < 100; i++){
        if(localStorage.getItem(type+i) == null) return i;
    }
}

function clearWholeHistory(){
    if(confirm('Czy chcesz wyczyścić całą historię wszystkich obliczeń?')){
        localStorage.clear();
    }
    return "The history has been cleared successfully!";
}

function returnHistory(type){
    var output = '';
    var taken = [];

    for(var i = 100; i >= 1; i--){
        taken[i] = localStorage.getItem(type+i);
        if(taken[i] != null){
            output = `
            <div class="history-item">
                <div class="history-no history-inItem">`+i+`</div>
                <div class="history-val">`+localStorage.getItem(type+i)+`</div>
                <div class="history-clear history-inItem" style="cursor: pointer;"><a class="history-a" onclick="clearOne('`+type+`','`+i+`')"><i class="demo-icon icon-trash-empty"></i></a></div>
            </div>
            `+output;
        }
    }
    document.querySelector('.calculation-history').innerHTML = output;
}

function clear(type){
    for(var i = 1; i < 100; i++){
        if(localStorage.getItem(type+i) == null) i = 101;
        else localStorage.removeItem(type+i);
    }
}

function clearOne(type, key){ 
    if(confirm(`Czy na pewno chcesz usunąć wynik numer `+key+``)){
        localStorage.removeItem(type+key);
        returnHistory(type);
    }
}
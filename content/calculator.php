<h1>Valluta kalkulaator var 1</h1>
<form name="var1">
    <label for="kogus">Sisesta kogus:</label>
    <input type="number" name="kogus" id="kogus"> euro
    <br>
    <fieldset>
        <legend>Vali valuuta:</legend>

        <input type="radio" name="valuuta" id="dollar" value="dollar" onchange="radioChange(event)">
        <label for="dollar">dollar</label>
        <br>
        <input type="radio" name="valuuta" id="rub" value="rub" onchange="radioChange2(event)">
        <label for="rub">rouble</label>
        <br>
        <input type="radio" name="valuuta" id="kroon" value="kroon" onchange="radioChange3(event)">
        <label for="kroon">Rootsi kroon</label>
        <br>
        <input type="radio" name="valuuta" id="frank" value="frank" onchange="radioChange4(event)">
        <label for="frank">Sveitsi frank</label>
        <br>
    </fieldset>
    <div id="vastus">
        Siia tuleb vastus...
    </div>
</form>

<img src="content/img/dollar.jpg" id="pilt">

<h1>Valluta kalkulaator var 2</h1>
<form name="var2">
    <label for="kogus2">Sisesta kogus:</label>
    <input type="number" name="kogus2" id="kogus2"> euro
    <br>
    <select name="valuuta2" onchange="selectOptionChange(event)">
        <option value=""></option>
        <option value="dollar">dollar</option>
        <option value="kroon">Rootse kroon</option>
        <option value="frank">Sveitsi frank</option>
        <option value="rub">Rouble</option>
    </select>
    <div id="vastus2">
        Siia tuleb vastus...
    </div>
</form>
<form>
    <h1>Valluta kalkulator var 3</h1>
    <label for="kogus3">Sisesta kogus:</label>
    <input type="number" name="kogus3" id="kogus3"> euro
    <br>
    <label for="valuutanimi">Sissa kogus(dollar,rouble,frank,kroon)</label>
    <input type="text" name="kogus3" id="valuutanimi" placeholder="Valuuta" onclick="inputValutaText()"> euro
    <input type="button"   onclick="inputValutaText()"  value="OK">

    <div id="vastus3">
        Siia tuleb vastu...
    </div>
</form>
<h1>Minu kalkulator</h1>
<form name="var4">
    <label for="kogus5">Sisesta kaugus:</label>
    <input type="number" name="kogus5" id="kogus5"> cm
    <br>
    <select name="valuuta5" onchange="minu(event)">
        <option value=""></option>
        <option value="m">meeter</option>
        <option value="cm">sentimeetrit</option>
        <option value="dm">detsimeeter</option>
        <option value="mm">millimeeter</option>
        <option value="km">kilomeetrit</option>
    </select>
    <div id="vastus5">
        Siia tuleb vastus...
    </div>
</form>
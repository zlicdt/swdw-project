function displayAttrAndImg(tag) {
    switch (tag) {
        // Guangzhou
        case "H1":
            var text = "<h2>Guangzhou Attractions:</h2><ul><li>Canton Tower</li><li>Baiyun Mountain</li><li>Shamian Island</li><li>Chen Clan Ancestral Hall</li></ul>";
            document.getElementById("attrsArea").innerHTML = text;
            document.getElementById("imgArea").innerHTML = "<img src='./imgs/Guangzhou.webp' alt='Guangzhou' style='width:100%; height:auto;'>";
            break;
        // Jilin
        case "H2":
            var text = "<h2>Jilin Attractions:</h2><ul><li>Rime</li><li>Ski Resort</li><li>River City</li><li>Close to the DPRK.</li></ul>";
            document.getElementById("attrsArea").innerHTML = text;
            document.getElementById("imgArea").innerHTML = "<img src='./imgs/Jilin.webp' alt='Jilin' style='width:100%; height:auto;'>";
            break;
        // Jiujiang
        case "H3":
            var text = "<h2>Jiujiang Attractions:</h2><ul><li>Mount Lu</li><li>Poyang Lake</li><li>Donglin Temple</li><li>Bailu Dong Academy</li></ul>";
            document.getElementById("attrsArea").innerHTML = text;
            document.getElementById("imgArea").innerHTML = "<img src='./imgs/Jiujiang.webp' alt='Jiujiang' style='width:100%; height:auto;'>";
            break;
        // Quanzhou
        case "H4":
            var text = "<h2>Quanzhou Attractions:</h2><ul><li>Landmarks of Quanzhou</li><li>Ancient Trees and Gardens</li><li>Buddhist culture</li><li>Art and Cultural Relics</li></ul>";
            document.getElementById("attrsArea").innerHTML = text;
            document.getElementById("imgArea").innerHTML = "<img src='./imgs/Quanzhou.webp' alt='Quanzhou' style='width:100%; height:auto;'>";
            break;
    }
}
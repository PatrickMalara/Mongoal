window.addEventListener("load", function () {
    getWritings();

    let saveBtn = document.getElementById("save");
    saveBtn.addEventListener("click", function () {
        saveWritings();
    });

    function saveWritings() {
        let prompts = [];
        for (let i = 1; i < 11; i++) {
            prompts.push(document.getElementById("prompt" + i).value);
        }

        let params = "prompt1=" + prompts[0] + "&prompt2=" + prompts[1] + "&prompt3=" + prompts[2] + "&prompt4=" + prompts[3] + "&prompt5=" + prompts[4] + "&prompt6=" + prompts[5] + "&prompt7=" + prompts[6] + "&prompt8=" + prompts[7] + "&prompt9=" + prompts[8] + "&prompt10=" + prompts[9];

        fetch("saveWritings.php", {
            method: 'POST',
            credentials: 'include',
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: params
        })
            .then(response => response.text())
            .then(saveWritingsSuccess);
    }

    function saveWritingsSuccess(text) {
        if (text != "Updating Failed")
            alert("Writings Saved");
        else
            alert("Writings DID NOT Save");

    }

    function getWritingsSuccess(json) {
        //Update the writng textareas
        for (let i = 1; i < 11; i++) {
            document.getElementById("prompt" + (i)).value = json[(i - 1)].writing;
        }
    }

    function getWritings() {

        fetch("getWritings.php", {
            method: 'POST',
            credentials: 'include',
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
        })
            .then(response => response.json())
            .then(getWritingsSuccess);
    }
});
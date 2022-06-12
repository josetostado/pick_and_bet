function like(e, idForecast, like) {
    const url = window.location.origin + "/like-pick";
    let newContent;

    if (e.dataset.state === "true") {
        e.dataset.state = false;
        e.classList.remove("like-active");
        newContent = ` ${parseInt(e.textContent) - 1}`;
    } else {
        e.classList.add("like-active");
        e.dataset.state = true;
        newContent = ` ${parseInt(e.textContent) + 1}`;

        let brother = e.nextElementSibling ?? e.previousElementSibling;

        if (brother.dataset.state === "true") {
            brother.dataset.state = false;
            brother.classList.remove("like-active");
            brother.textContent = ` ${parseInt(brother.textContent) - 1}`;
            let send = {
                id: parseInt(idForecast),
                like: !like,
                state: false,
            };
            sendRequest(url, send, false);
        }
    }

    e.textContent = newContent;

    let send = {
        id: parseInt(idForecast),
        like,
        state: e.dataset.state === "true",
    };

    sendRequest(url, send, true);
}

function sendRequest(url, send, localSave) {
    fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
            "X-CSRF-Token": document.querySelector("input[name=_token]").value,
        },
        body: JSON.stringify(send),
    })
        .then((res) => res.json())
        .then((res) => {
            if (localSave) {
                saveLike(send);
            }
        });
}

function getItems() {
    return JSON.parse(localStorage.getItem("fores") ?? "[]");
}

function saveLike(oFore) {
    let listaAux = getItems();
    let i = listaAux.findIndex((o) => o.id == oFore.id);
    if (i > -1) {
        listaAux.splice(i, 1);
    }
    listaAux.push(oFore);
    localStorage.setItem("fores", JSON.stringify(listaAux));
}

function likeItems() {
    let listaAux = getItems();
    document.querySelectorAll("i[data-id]").forEach((e) => {
        let ref = listaAux.find((o) => o.id == e.dataset.id);
        if (ref && ref.state) {
            if (
                (ref.like && e.classList.contains("fa-thumbs-up")) ||
                (!ref.like && e.classList.contains("fa-thumbs-down"))
            ) {
                e.dataset.state = true;
                e.classList.add("like-active");
            }
        }
    });
}

likeItems();

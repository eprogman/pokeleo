<style>
    @import url('https://fonts.googleapis.com/css2?family=Lacquer&display=swap');

    :root {

        color-scheme: dark;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 0;
        font-size: 62.5%;
        box-sizing: inherit;
    }

    .container {
        display: grid;
        place-content: center;
        font-family: "Lacquer", system-ui;
        margin: auto;
        padding: 40px;
        margin-top: 40px;
    }

    .main {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    label {
        font-size: 2em;
        padding: 10px;
        color: yellow;
    }

    button,
    input {
        font-size: 2em;
    }

    button {
        cursor: pointer;
        padding: 4px;
        background-color: chocolate;
        border: none;
        font-weight: bold;
        letter-spacing: 0.1em;
        border-radius: 5px;
        margin-left: 5px;
    }

    button:hover {

        opacity: 0.8;
    }


    .titulo {

        padding: 10px;
        color: red;
        font-size: 2.5em;

    }

    .nombre {
        color: aquamarine;
        letter-spacing: 0.1em;
    }


    .nombre span {
        color: red;
        font-size: 1.7em;
    }

    .nivel {
        color: aquamarine;
        letter-spacing: 0.1em;
    }

    .nivel span {
        color: red;
        font-size: 1.7em;
    }

    .mov {
        color: aquamarine;
        letter-spacing: 0.1em;
    }

    .mov span {
        color: rebeccapurple;
        font-size: 1.5em;
        letter-spacing: 0.1em;
    }

    .habi {
        color: aquamarine;
        letter-spacing: 0.1em;
    }

    .habi span {
        color: yellowgreen;
        font-size: 1.5em;
        letter-spacing: 0.1em;
    }
</style>
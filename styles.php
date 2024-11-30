<style>
    @import url('https://fonts.googleapis.com/css2?family=Lacquer&display=swap');

    :root {

        color-scheme: dark;
    }

    html {
        box-sizing: border-box;
        font-size: 62.5%;
    }


    *,
    *::before,
    *::after {
        box-sizing: inherit;

    }


    body {
        margin: 0;
        padding: 0;
    }

    .container {
        font-family: "Lacquer", system-ui;
        padding: 40px;
        display: grid;
        place-content: center;
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

    @media (max-width:584px) {

        .container {

            margin: auto;
            padding: 0 20px 0 20px;
            font-size: 0.8em;

        }

        label,
        input,
        button {
            display: flex;
            flex-direction: column;
            margin: 20px;

        }

        .nivel_mov {
            width: 80%;
            margin: auto;
        }

        .mov span {
            font-size: 1em;
        }

        .habi span {
            font-size: 1em;
        }

    }
</style>
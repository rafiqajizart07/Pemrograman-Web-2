<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling.css" />

    <title>Suit Games</title>
</head>

<body>
    <div id="app">
        <div class="summary">
            <h1 class="title">SUIT BATU GUNTING KERTAS!!!</h1>
            <br />
            <h1 id="inGame"></h1>
            <h3 id="result"></h3>
        </div>
        <div class="games">
            <div class="option" onclick="pickOption('🖐')">🖐</div>
            <div class="option" onclick="pickOption('✌')">✌</div>
            <div class="option" onclick="pickOption('✊')">✊</div>
        </div>
    </div>

    <script>
        class Start {
            constructor() {
                this.playerName = "Kamu"
                this.botName = "Bot"
                this.playerOption;
                this.botOption;
                this.winner = ""
            }

            get getBotOption() {
                return this.botOption;
            }

            set setBotOption(option) {
                this.botOption = option;
            }

            get getPlayerOption() {
                return this.playerOption
            }

            set setPlayerOption(option) {
                this.playerOption = option;
            }

            botBrain() {
                const option = ["🖐", "✌", "✊"];
                const bot = option[Math.floor(Math.random() * option.length)];
                return bot;
            }

            winCalculation() {
                if (this.botOption == "🖐" && this.playerOption == "✌") {
                    return this.winner = this.playerName
                } else if (this.botOption == "🖐" && this.playerOption == "✊") {
                    return this.winner = this.botName;
                } else if (this.botOption == "✌" && this.playerOption == "🖐") {
                    return this.winner = this.botName;
                } else if (this.botOption == "✌" && this.playerOption == "✊") {
                    return this.winner = this.playerName
                } else if (this.botOption == "✊" && this.playerOption == "🖐") {
                    return this.winner = this.playerName
                } else if (this.botOption == "✊" && this.playerOption == "✌") {
                    return this.winner = this.botName;
                } else {
                    return this.winner = "SERI"
                }
            }

            matchResult() {
                if (this.winner != "SERI") {
                    return `${this.winner} MENANG!`;
                } else {
                    return `WAAA ${this.winner}, GAK ADA YG MENANG 🤪`;
                }
            }
        }

        function pickOption(params) {
            const start = new Start();
            start.setPlayerOption = params;
            start.setBotOption = start.botBrain();
            start.winCalculation();

            const inGame = document.getElementById("inGame");
            const result = document.getElementById("result");

            inGame.textContent = "..."
            result.textContent = "..."

            setTimeout(() => {
                inGame.textContent = `${start.getPlayerOption} VS ${start.getBotOption}`
                result.textContent = start.matchResult();
            }, 1500);

        }
    </script>
</body>

</html>
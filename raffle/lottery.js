document.addEventListener("DOMContentLoaded", () => {
    const participants = ["Alice", "Bob", "Charlie", "David", "Eve", 'Frank', 'Goodman', 'Henry']; // 参加者のリスト
    const lotteryButton = document.getElementById("lottery-button");
    const winnerDisplay = document.getElementById("lottery-winner");
    winnerDisplay.style.fontSize = "24px";
    winnerDisplay.style.fontWeight = "bold";

    lotteryButton.addEventListener("click", () => {
        // アニメーション中はボタンを無効にする
        lotteryButton.disabled = true;

        // ランダムに当選者を選択
        const winnerIndex = Math.floor(Math.random() * participants.length);
        
        const winner = participants[winnerIndex];

        console.log(winnerIndex);

        // 当選者表示をアニメーションさせる
        animateWinner(winner);
    });

    function animateWinner(winner) {
        let count = 0;
        const interval = setInterval(() => {
            winnerDisplay.textContent = participants[count];
            count = (count + 1) % participants.length;
        }, 200); // 200msごとに当選者表示を切り替える

        // 3秒後にアニメーションを停止して当選者を表示
        setTimeout(() => {
            clearInterval(interval);
            winnerDisplay.textContent = `${winner}`;
            lotteryButton.disabled = false; // ボタンを有効にする
        }, 3000);
    }

});

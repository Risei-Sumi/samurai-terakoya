
const button = document.getElementById('btn');
// HTML要素がクリックされたときにイベント処理を実行する
button.addEventListener('click', () => {
  // h2変更
  setTimeout(() => {
    document.getElementById("text").innerHTML = 'ボタンをクリックしました';
},2000);
});

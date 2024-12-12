<form action="kadai01_write.php" method="post">
    外食どこ行きたい?アンケート
    <div>
        <label for="name">なまえ</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <input type="radio" id="choice01" name="choice" value="かいてんすし">
        <label for="choice01">かいてんすし</label>
    </div>
    <div>
        <input type="radio" id="choice02" name="choice" value="ファミレス">
        <label for="choice02">ファミレス</label>
    </div>
    <div>
        <input type="radio" id="choice03" name="choice" value="やきにく">
        <label for="choice03">やきにく</label>
    </div>
    <div>
        <input type="radio" id="choice04" name="choice" value="ハンバーガー">
        <label for="choice04">ハンバーガー</label>
    </div>
    <div>
        <input type="radio" id="choice05" name="choice" value="ハンバーガー">
        <label for="choice05">そのた</label>
    </div>
    <textarea name="otherchoice" id="choice05"></textarea>
    <input type="submit" value="送信">
</form>
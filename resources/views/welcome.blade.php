<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ระบบบันทึกผลการทดสอบขอใบอนุญาตขับขี่</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
    <main align="center">
        <div class="topic">
            <h2>ระบบบันทึกผลการทดสอบขอใบอนุญาตขับขี่</h2>
        </div>
        <form action="/save-data" method="POST">
        @csrf
        <div class="name">
            <label>ชื่อ:</label>
            <input name="name" type="text">
            <label>นามสกุล:</label>
            <input name="surename" type="text">
        </div>
        <div class="body-test">
            <br>
            <b>การทดสอบร่างกาย</b><br>
                <label for="data1">ทดสอบตาบอดสี:</label><br>
                <label>ผ่าน: <input type="radio" name="status1" value="pass" required></label>
                <label>ไม่ผ่าน: <input type="radio" name="status1" value="fail" required></label>
                <br>

                <label for="data2">ทดสอบสายตายาว:</label><br>
                <label>ผ่าน: <input type="radio" name="status2" value="pass" required></label>
                <label>ไม่ผ่าน: <input type="radio" name="status2" value="fail" required></label>
                <br>

                <label for="data3">ทดสอบสายตาเอียง:</label><br>
                <label>ผ่าน: <input type="radio" name="status3" value="pass" required></label>
                <label>ไม่ผ่าน: <input type="radio" name="status3" value="fail" required></label>
                <br>

                <label for="data4">ทดสอบการตอบสนองของร่างกาย:</label><br>
                <label>ผ่าน: <input type="radio" name="status4" value="pass" required></label>
                <label>ไม่ผ่าน: <input type="radio" name="status4" value="fail" required></label>
                <br>
                <br>
        </div>
        <div class="theory-test">
            <b>การทดสอบภาคทฤษฏี</b><br>
                <label for="data1">ป้ายจราจร:</label><br>
                <input name="signs-traff" type="text" required>
                <br>

                <label for="data2">เส้นจราจร:</label><br>
                <input name="lines-traff" type="text" required>
                <br>

                <label for="data3">การให้ทาง:</label><br>
                <input name="give-way" type="text" required>
                <br>
                <br>
        </div>
        <div class="work-test">
            <b>การสอบภาคปฏิบัติ</b><br>
                <label>ผ่าน: <input type="radio" name="statuswork" value="pass" required></label>
                <label>ไม่ผ่าน: <input type="radio" name="statuswork" value="fail" required></label>
                <br>
                <br>
                <button type="submit">บันทึกข้อมูล</button>
        </div>
        </form>
    </main>
    </body>
</html>

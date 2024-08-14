<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>新規住所</title>
</head>
<body>

  <section id="new_addres">
    <h2>手動で住所を入力してください！</h2>

    <form action="/newAddress" method="post">
      @csrf
      <input type="text" name="addres" required>
      <button>登録</button>
    </form>
  </section>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form>
        <label for="option">Select an option:</label>
        <select id="option" name="option">
          {{-- @foreach ($options as $ID => $Nama)
            <option value="{{ $ID }}">{{ $Nama }}</option>
          @endforeach --}}
        </select>
      </form>

</body>
</html>

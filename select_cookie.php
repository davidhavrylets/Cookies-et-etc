<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Choisir une couleur</title>
</head>
<body>
   <form action="index.phtml" method="post">
       <label for="color">Choisissez une couleur : </label>
       <select name="color" id="color">
           <option value="noir">Noir</option>
           <option value="rouge">Rouge</option>
           <option value="blue">Blue</option>
       </select>
       <button type="submit">Je veux ca</button>
   </form>
</body>
</html>
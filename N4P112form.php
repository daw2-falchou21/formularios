<html>
 <head>
  <title>Greetings</title>
 </head>
<body>
 <form action="N4P113formprocess.php" method="POST">
  <table>
   <tr>
    <td>Name</td>
     <td><input type="text" name="name" /></td>
  </tr><tr>
   <td>Greeting</td>
   <td>
    <select name="greeting">
     <option value="Hola">Hola</option>
     <option value="Hello">Hello</option>
     <option value="Halo">Halo</option>
     <option value="Annyeonghaseyo">Annyeonghaseyo</option>
   </select>
   </td>
  </tr><tr>
   <td> </td>
   <td>
    <input type="checkbox" name="debug" checked="checked"/>
     Display Debug info
    </td>
   </tr><tr>
   <td colspan="2" style="text-align: center">
    <input type="submit" name="submit" value="Submit" />
 </td>
</tr>
</table>
</form>
</body>
</html>

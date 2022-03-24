

host = 'localhost;'
user = 'root';
pwd = '';
db = 'demo';
con = new mysqli(host,user,pwd,db);
sql = 'INSERT INTO `database_name`( `Variable_name_from_db`) VALUES ('variable_name_from_code')';
if(con->query(sql) == TRUE)
{
 echo <script>alert('Data Added ')</script>;
 header('refresh:0,url=FileName_where_you_want_redirect');  
}
else
{
echo '<script>alert('data not added')</script>';
}
con->close();
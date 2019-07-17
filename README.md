# GitTest
**Test**:tada:


https://github.com/
	GIT CDL{
		https://jrebel.com/wp-content/uploads/2016/02/Git-Cheat-Sheet-pdf-v2.png
		git status
		git pull
		git add .
		git commit -m "Messaggio"
		git push
		git branch
		git branch MIA_BRANCH
		git checkout BRANCH
		git branch -d BRANCH
	}
	
	CF CDL{
		https://blog.anynines.com/wp-content/uploads/2016/04/a9s-CF-Command-Line-Cheat-Sheet.jpg
		cf push -b https://github.com/cloudfoundry/php-buildpack.git fa-php-test //deployata da una cartella a parte unico file
		update(deploya l'index di default, se non c'è restituisce 404; per fixare basta aggiungere al link il n.e del file.)
	}
	
	ClearDB{
		"hostname": "us-cdbr-iron-east-02.cleardb.net",
		"jdbcUrl": "jdbc:mysql://us-cdbr-iron-east-02.cleardb.net/ad_ea13be3c598c03b?user=b090f028798438\u0026password=3051bc1b",
		"name": "ad_ea13be3c598c03b",
		"password": "3051bc1b",
		"port": "3306",
		"uri": "mysql://b090f028798438:3051bc1b@us-cdbr-iron-east-02.cleardb.net:3306/ad_ea13be3c598c03b?reconnect=true",
		"username": "b090f028798438"
	}

	SQL Queries{
		create table users(
id int not null auto_increment primary key,
 nome varchar(20) not null,
 cognome varchar(20) not null
);

		delete from users where users.id = ~~~;

		select * from users;
	}

<p align="center"><a href="https://radikal.host/i/dazh8e"><img src="https://e.radikal.host/2024/03/25/ElasticSearch-Laravel.gif" alt="ElasticSearch-Laravel.gif" border="0"></a></p>
<p>Пример реализации поисковой формы для сайта с использованием ElasticSearch.</p>
<p>В данном случае используется событие Created для исходной модели, за счет метода и идет индексация на каждую строку записи в БД. В примере специально не делал слушателя и не вешал событие на все модели. При желании это можно сделать, также добавив доп.поиск по контенту.</p>
<p>*ElasticSearch установлен локально. Смена пароля - .\elasticsearch-reset-password -u elastic . Логин - elastic. Для отмены авторизации (elasticsearch.yml) - xpack.security.enabled: false </p>



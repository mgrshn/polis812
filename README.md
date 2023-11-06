Задача:

Написать класс для работы с API https://jsonplaceholder.typicode.com

Сделать методы для получения пользователей, их постов и заданий

Добавить метод работы с конкретным постом (добавление / редактирование / удаление)

--

Для работы с апи используется клиент JsonPlaceholderApi, реализующий методы для создания, чтения, обновления и удаления ресурсов.

Чтобы начать работу, создайте экземпляр класса:

```php
$apiClient = new JsonPlaceholderApi();
```

Для получения всех пользователей/постов/задач реализованы методы:

```php
$apiClient->getAllUsers();//вернет массив всех пользователей
$apiClient->getAllPosts();//вернет массив всех постов
$apiClient->getAllTasks();//вернет массив всех задач
```

Для получения одного или нескольких пользователей реализованы методы:

```php
$apiClient->getUserById(int $id);//вернет конректного пользователя
$apiClient->getUsersByIds(array $ids);//вернет массив пользователей c id, перечисленными в массиве $ids
```

Пример использования:

```php
$user = $apiClient->getUserById(3);
print_r($user);
```

```php
Array
(
    [id] => 3
    [name] => Clementine Bauch
    [username] => Samantha
    [email] => Nathan@yesenia.net
    [address] => Array
        (
            [street] => Douglas Extension
            [suite] => Suite 847
            [city] => McKenziehaven
            [zipcode] => 59590-4157
            [geo] => Array
                (
                    [lat] => -68.6102
                    [lng] => -47.0653
                )

        )

    [phone] => 1-463-123-4447
    [website] => ramiro.info
    [company] => Array
        (
            [name] => Romaguera-Jacobson
            [catchPhrase] => Face to face bifurcated interface
            [bs] => e-enable strategic applications
        )

)
```

```php
$users = $apiClient->getUsersByIds([200, 2, 423, 1, 23332]);
print_r($users);
```

```php
Array
(
    [0] => Array
        (
            [id] => 2
            [name] => Ervin Howell
            [username] => Antonette
            [email] => Shanna@melissa.tv
            [address] => Array
                (
                    [street] => Victor Plains
                    [suite] => Suite 879
                    [city] => Wisokyburgh
                    [zipcode] => 90566-7771
                    [geo] => Array
                        (
                            [lat] => -43.9509
                            [lng] => -34.4618
                        )

                )

            [phone] => 010-692-6593 x09125
            [website] => anastasia.net
            [company] => Array
                (
                    [name] => Deckow-Crist
                    [catchPhrase] => Proactive didactic contingency
                    [bs] => synergize scalable supply-chains
                )

        )

    [1] => Array
        (
            [id] => 1
            [name] => Leanne Graham
            [username] => Bret
            [email] => Sincere@april.biz
            [address] => Array
                (
                    [street] => Kulas Light
                    [suite] => Apt. 556
                    [city] => Gwenborough
                    [zipcode] => 92998-3874
                    [geo] => Array
                        (
                            [lat] => -37.3159
                            [lng] => 81.1496
                        )

                )

            [phone] => 1-770-736-8031 x56442
            [website] => hildegard.org
            [company] => Array
                (
                    [name] => Romaguera-Crona
                    [catchPhrase] => Multi-layered client-server neural-net
                    [bs] => harness real-time e-markets
                )

        )

)
```

Для получения всех постов конкретного пользователя реализован метод:

```php
$apiClient->getUserPosts(int $id);//вернет массив всех постов пользователя с указанным $id
```

Для получения всех задач конкретного пользователя реализован метод:

```php
$apiClient->getUserTasks(int $id);//вернет массив всех задач пользователя с указанным $id
```

Пример использования:

```php
$tasks = $apiClient->getUserTasks(1);
print_r($tasks);
```

```php
Array
(
    [0] => Array
        (
            [userId] => 1
            [id] => 1
            [title] => delectus aut autem
            [completed] => 
        )

    [1] => Array
        (
            [userId] => 1
            [id] => 2
            [title] => quis ut nam facilis et officia qui
            [completed] => 
        )

    [2] => Array
        (
            [userId] => 1
            [id] => 3
            [title] => fugiat veniam minus
            [completed] => 
        )

    [3] => Array
        (
            [userId] => 1
            [id] => 4
            [title] => et porro tempora
            [completed] => 1
        )

    [4] => Array
        (
            [userId] => 1
            [id] => 5
            [title] => laboriosam mollitia et enim quasi adipisci quia provident illum
            [completed] => 
        )

    [5] => Array
        (
            [userId] => 1
            [id] => 6
            [title] => qui ullam ratione quibusdam voluptatem quia omnis
            [completed] => 
        )

    [6] => Array
        (
            [userId] => 1
            [id] => 7
            [title] => illo expedita consequatur quia in
            [completed] => 
        )

    [7] => Array
        (
            [userId] => 1
            [id] => 8
            [title] => quo adipisci enim quam ut ab
            [completed] => 1
        )

    [8] => Array
        (
            [userId] => 1
            [id] => 9
            [title] => molestiae perspiciatis ipsa
            [completed] => 
        )

    [9] => Array
        (
            [userId] => 1
            [id] => 10
            [title] => illo est ratione doloremque quia maiores aut
            [completed] => 1
        )

    [10] => Array
        (
            [userId] => 1
            [id] => 11
            [title] => vero rerum temporibus dolor
            [completed] => 1
        )

    [11] => Array
        (
            [userId] => 1
            [id] => 12
            [title] => ipsa repellendus fugit nisi
            [completed] => 1
        )

    [12] => Array
        (
            [userId] => 1
            [id] => 13
            [title] => et doloremque nulla
            [completed] => 
        )

    [13] => Array
        (
            [userId] => 1
            [id] => 14
            [title] => repellendus sunt dolores architecto voluptatum
            [completed] => 1
        )

    [14] => Array
        (
            [userId] => 1
            [id] => 15
            [title] => ab voluptatum amet voluptas
            [completed] => 1
        )

    [15] => Array
        (
            [userId] => 1
            [id] => 16
            [title] => accusamus eos facilis sint et aut voluptatem
            [completed] => 1
        )

    [16] => Array
        (
            [userId] => 1
            [id] => 17
            [title] => quo laboriosam deleniti aut qui
            [completed] => 1
        )

    [17] => Array
        (
            [userId] => 1
            [id] => 18
            [title] => dolorum est consequatur ea mollitia in culpa
            [completed] => 
        )

    [18] => Array
        (
            [userId] => 1
            [id] => 19
            [title] => molestiae ipsa aut voluptatibus pariatur dolor nihil
            [completed] => 1
        )

    [19] => Array
        (
            [userId] => 1
            [id] => 20
            [title] => ullam nobis libero sapiente ad optio sint
            [completed] => 1
        )

)
```

Для работы с постами пользователя реализованы следующие методы:
1. Добавление нового поста

```php
$apiClient->createPost(string $title, string $body, int $userId);//создаст новый пост, в качестве ответа вернется массив с созданным постом
```

Пример использования:

```php
$newPost = $apiClient->createPost('new title', 'new body', 1001);
print_r($newPost);
```

```php
Array
(
    [title] => new title
    [body] => new body
    [userId] => 1001
    [id] => 101
)
```

2. Обновление существующего поста

```php
$apiClient->updatePost(int $postId, string $title, string $body, string|int $userId);//полностью обновит пост, в качеств еответа вернется массив с измененным постом
```

Пример использования:

```php
$updatedPost = $apiClient->updatePost('1', 'my new title', 'my new body', 1001);
print_r($updatedPost);
```

```php
Array
(
    [title] => my new title
    [body] => my new body
    [userId] => 1001
    [id] => 1
)
```

3. Изменение одного поля в существующем посте

```php
$apiClient->patchPost(int $postId, string $fieldName, string $newValue);//изменит указанное в $fieldName поле значением $newValue и вернет массив с измененным постом. Если поля для изменения не существует - вернет пустой массив
```

Пример использования:

```php
$patchedPost = $apiClient->patchPost('10', 'body', 'my new body');
print_r($patchedPost);
```

```php
Array
(
    [userId] => 1
    [id] => 10
    [title] => optio molestias id quia eum
    [body] => my new body
)
```

4. Удаление поста

```php
$apiClient->deletePost(int $postId);//удалит пост с переданным $postId и вернет пустой массив. Вернет пустой массив, даже если поста не существовало
```

Пример использования:

```php
$deletedPost= $apiClient->deletePost(1);
print_r($deteletPost);
```

```php
Array
(
)
```

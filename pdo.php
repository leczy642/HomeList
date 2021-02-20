<?php 
    class Connection{
        //initialize the pdo property
        public $pdo = null;

        public function __construct(){

            try{
                //Initialize the connection to the database
                $this->pdo = new PDO('mysql:server=localhost;dbname=blog', 'root', '');
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $exception){
                echo "Error: ".$exception.getMessage();
            }
        }

        //retrieving all blog posts
        public function retrievePosts(){
            //select all fields from the blog table
            $statement = $this->pdo->prepare("SELECT * FROM blog ORDER BY create_date DESC");
            //complete the query with execute function
            $statement->execute();
            //return the data as an associative array..
            return $statement->fetchAll(PDO::FETCH_ASSOC);
            
        }
        //creating a post
        //the createPOst function receives an array as a parameter
        public function createPost($blogpost){
            $statement = $this->pdo->prepare("INSERT INTO blog (title, description, img_url, create_date)
            VALUES (:title, :description, :img_url, :date)");
            $statement->bindValue('title', $blogpost['title']);
            $statement->bindValue('description', $blogpost['description']);
            $statement->bindValue('img_url', $blogpost['img_url']);
            $statement->bindValue('date', date('Y-m-d H:i:s'));
            return $statement->execute();
        }
        //updating a post
        //the updatePost function receives the id and an array as a parameter
        public function updatePost($id, $blogpost){
            //using the prepare function to query the database to update the notes table where id = post id
            $statement = $this->pdo->prepare("UPDATE blog SET title = :title, description = :description WHERE id = :id");
            $statement->bindValue('id', $id);
            $statement->bindValue('title', $blogpost['title']);
            $statement->bindValue('description', $blogpost['description']);
            return $statement->execute();
        }

        public function deletePost($id){
            //using the prepare function delete from notes where id = :id
            $statement = $this->pdo->prepare("DELETE FROM blog WHERE id = :id");
            //bind the id value with $id
            $statement->bindValue('id', $id);
            //complete the query
            return $statement->execute();
        }

        //get a post by id
        public function getPostById($id)
        {   
            $statement = $this->pdo->prepare("SELECT * FROM blog WHERE id = :id");
            $statement->bindValue('id', $id);
            $statement->execute();
            //we do this since we are retrieving data from the database
            return $statement->fetch(PDO::FETCH_ASSOC);
        }









    }
    return new Connection();
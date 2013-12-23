<?php

class requests_controller extends base_controller {

    public function __construct() {
        parent::__construct();

        # Make sure user is logged in
        if(!$this->user) {
            # die("Members only. Redirect to index to login or sign up);
            Router::redirect("/");
        }
        # instance of menus visible for all posts methods
        $this->template->hide_menu = FALSE;
        $this->template->menu = View::instance('v_requests_index');

    }

    public function share() {

        # Setup view
        $this->template->content = View::instance('v_requests_share');
        $this->template->title   = "Share a Prayer Request";

        # Render template
        echo $this->template;

    }

    public function p_share() {

        # Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;

        # Unix timestamp of when this post was created / modified
        $_POST['created']  = Time::now();
        $_POST['modified'] = Time::now();

        # Insert
        # Note we didn't have to sanitize any of the $_POST data because we're using the insert method which does it for us
        DB::instance(DB_NAME)->insert('requests', $_POST);

        # send them to view list of active posts

        Router::redirect("/requests/index");

    }
   
   
    # function index() lists all the posts of members being followed
    # it automatically has the user following his/her own own posts.
    public function index() {
        # Set up the View
        $this->template->content = View::instance('v_requests_index');
        $this->template->title = "See Prayer Requests";

        # query based on whom the user is currently following

        $q = 'SELECT
                requests.request_id,
                requests.content,
                requests.created,
                requests.modified,
                requests.user_id AS request_user_id,
                users_users.user_id AS follower_id,
                users.first_name,
                users.last_name
              FROM requests
              INNER JOIN users_users 
                ON requests.user_id = users_users.user_id_followed
              INNER JOIN users
                ON requests.user_id = users.user_id
              WHERE users_users.user_id = '.$this->user->user_id;

         # Run query
         $requests = DB::instance(DB_NAME)->select_rows($q);

         # Pass data to the view
         $this->template->content->requests = $requests;

         # Render view

         echo $this->template;      
    }
   
   
    #lists all the users and displays connections to $user
    # i.e where the members are followed or not by this $user
    public function users() {
        # Set up the View
        $this->template->content = View::instance("v_requests_users");
        $this->template->title = "Follow Others Prayer Rquests";
        # query list of all users (except current user who is automatically followed)
        $q = "SELECT * FROM users WHERE users.user_id !=".$this->user->user_id;

        $users = DB::instance(DB_NAME)->select_rows($q);

        # Build query to get all the users from users_users followed by this user
        $q = "SELECT *
            FROM users_users
            WHERE users_users.user_id = ".$this->user->user_id;
        
        # use select_array APi with user_id_followed as index
        # to facilitate view display code
        $connections = DB::instance(DB_NAME)->select_array($q, 'user_id_followed');

        # Pass data to the view
        $this->template->content->users = $users;
        $this->template->content->connections = $connections;
        # Render this view

        echo $this->template;    

    }
    
    
    # cretes a new relationship in the user_user db to indicate that a user to being followed
    public function follow($user_id_followed) {

        # Prepare the data array to be inserted
        $data = Array (
            "created" => Time::now(),
            "user_id" => $this->user->user_id,
            "user_id_followed" => $user_id_followed);

        # insert array into users_users table
        DB::instance(DB_NAME)->insert('users_users', $data);

        # send back to follow users
        Router::redirect("/requests/users");
    }
    
    # deletes a line from the user_user db
    public function unfollow($user_id_followed) {
        # Where condition for the delete
        $where_condition = 'WHERE user_id =' .$this->user->user_id.' AND user_id_followed ='.$user_id_followed;

        # delete from DB table
        DB::instance(DB_NAME)->delete('users_users', $where_condition);

        # send them back to follow users

        Router::redirect('/requests/users');
    }
    
    # Delete a post
    public function delete($request_id) {
        # prepare where clause to delete post
        $where_condition = 'WHERE request_id =' .$request_id;
        # delete post from DB
        DB::instance(DB_NAME)->delete('requests',$where_condition);
        Router::redirect("/requests/index");
    }
    
    # Edit the text of a post
    public function edit($request_id) {
       
        # query statement
        $q = 'SELECT content FROM requests WHERE request_id =' .$request_id;
        
        # delete post from DB
        $request_text = DB::instance(DB_NAME)->select_field($q);
       
        # Setup view
        $this->template->content = View::instance('v_requests_edit');
        $this->template->title   = "Edit your Prayer Request";
        $this->template->content->request_text = $request_text;
        $this->template->content->request_id = $request_id;
        
        # Render template
        echo $this->template;
    }
    public function p_edit($request_id) {
       
        # build query statement
        $data = Array (
            "modified" => Time::now(),
            "content" => $_POST['content']);
        
        $where_condition = "WHERE request_id=" .$request_id;
        DB::instance(DB_NAME)->update_row('requests', $data, $where_condition);

        # redirect to list of posts
        Router::redirect('/requests/index');
    }
    
     public function p_edit($request_id) {
       
        # build query statement
        $data = Array (
            "yes" => $_POST['count'],
            "content" => $_POST['content']);
        
        $where_condition = "WHERE request_id=" .$request_id;
        DB::instance(DB_NAME)->update_row('requests', $data, $where_condition);

    }

}

?>
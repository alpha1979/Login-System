<?php

namespace Foundationphp\Sessions;

trait PersistentProperties 
{
    /**
    *@var string Name of the autologin cookie
    **/
    protected $cookie ='atit_auth';
    /**
    *@var string Default table where the session data is stored
    **/

    protected $table_sees = 'sessions';
    
    /**
    *@var string Name of the database table that stores user credentials
    **/

    protected $table_users = 'users';
    
    /**
    *@var string Name of database table that stores the autologin details
    **/

    protected $table_autologin = 'autologin';

    /**
    *@var string default column for session id;
    
    **/

    protected $col_sid= 'sid';
    
    protected $col_expiry ='expiry';
    
    protected $col_name = 'username';
    protected $col_data ='data';
    protected $col_ukey = 'user_key';
    protected $col_token = 'token';

    protected $col_created = 'created';
    protected $col_used = 'used';
    protected $col_persist = 'remember';
    protected $sess_uname = 'username';
    protected $sess_auth = 'authenticated';
    protected $sess_revalid = 'revalidated';
    protected $sess_ukey='user_key';
    
}
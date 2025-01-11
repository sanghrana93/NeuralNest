<?php

namespace application\Models;

use application\Model;

class PortfolioModel extends Model
{
    protected $allowedFields = ['b_title', 'b_content', 'serv_title', 'serv_content', 'created_at', 'updated_at'];
}

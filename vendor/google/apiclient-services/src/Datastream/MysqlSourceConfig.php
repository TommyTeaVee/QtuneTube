<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Datastream;

class MysqlSourceConfig extends \Google\Model
{
  protected $allowlistType = MysqlRdbms::class;
  protected $allowlistDataType = '';
  protected $rejectlistType = MysqlRdbms::class;
  protected $rejectlistDataType = '';

  /**
   * @param MysqlRdbms
   */
  public function setAllowlist(MysqlRdbms $allowlist)
  {
    $this->allowlist = $allowlist;
  }
  /**
   * @return MysqlRdbms
   */
  public function getAllowlist()
  {
    return $this->allowlist;
  }
  /**
   * @param MysqlRdbms
   */
  public function setRejectlist(MysqlRdbms $rejectlist)
  {
    $this->rejectlist = $rejectlist;
  }
  /**
   * @return MysqlRdbms
   */
  public function getRejectlist()
  {
    return $this->rejectlist;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MysqlSourceConfig::class, 'Google_Service_Datastream_MysqlSourceConfig');

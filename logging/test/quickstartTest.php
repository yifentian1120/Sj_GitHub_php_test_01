<?php
/**
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

use Google\Cloud\TestUtils\TestTrait;
use PHPUnit\Framework\TestCase;

class quickstartTest extends TestCase
{
    use TestTrait;

    public function testQuickstart()
    {
        $file = sys_get_temp_dir() . '/logging_quickstart.php';
        $contents = file_get_contents(__DIR__ . '/../quickstart.php');
        $contents = str_replace(
            ['YOUR_PROJECT_ID', '__DIR__'],
            [self::$projectId, sprintf('"%s/.."', __DIR__)],
            $contents
        );
        file_put_contents($file, $contents);

        // Invoke quickstart.php
        $output = $this->runSnippet($file);

        // Make sure it looks correct
        $this->assertEquals('Logged Hello, world!', $output);
    }
}

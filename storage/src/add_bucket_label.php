<?php
/**
 * Copyright 2017 Google Inc.
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

/**
 * For instructions on how to run the full sample:
 *
 * @see https://github.com/GoogleCloudPlatform/php-docs-samples/tree/master/storage/README.md
 */

namespace Google\Cloud\Samples\Storage;

# [START storage_add_bucket_label]
use Google\Cloud\Storage\StorageClient;

/**
 * Adds or updates a bucket label.
 *
 * @param string $bucketName the name of your Cloud Storage bucket.
 * @param string $labelName the name of the label to add.
 * @param string $labelValue the value of the label to add.
 */
function add_bucket_label($bucketName, $labelName, $labelValue)
{
    $storage = new StorageClient();
    $bucket = $storage->bucket($bucketName);
    $newLabels = [$labelName => $labelValue];
    $bucket->update(['labels' => $newLabels]);
    printf('Added label %s (%s) to %s' . PHP_EOL, $labelName, $labelValue, $bucketName);
}
# [END storage_add_bucket_label]

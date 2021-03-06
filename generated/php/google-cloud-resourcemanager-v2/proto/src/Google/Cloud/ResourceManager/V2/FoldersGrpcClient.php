<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2017 Google Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Cloud\ResourceManager\V2;

/**
 * Manages Cloud Resource Folders.
 * Cloud Resource Folders can be used to organize the resources under an
 * organization and to control the IAM policies applied to groups of resources.
 */
class FoldersGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Lists the Folders that are direct descendants of supplied parent resource.
     * List provides a strongly consistent view of the Folders underneath
     * the specified parent resource.
     * List returns Folders sorted based upon the (ascending) lexical ordering
     * of their display_name.
     * The caller must have `resourcemanager.folders.list` permission on the
     * identified parent.
     * @param \Google\Cloud\ResourceManager\V2\ListFoldersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListFolders(\Google\Cloud\ResourceManager\V2\ListFoldersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v2.Folders/ListFolders',
        $argument,
        ['\Google\Cloud\ResourceManager\V2\ListFoldersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Search for folders that match specific filter criteria.
     * Search provides an eventually consistent view of the folders a user has
     * access to which meet the specified filter criteria.
     *
     * This will only return folders on which the caller has the
     * permission `resourcemanager.folders.get`.
     * @param \Google\Cloud\ResourceManager\V2\SearchFoldersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchFolders(\Google\Cloud\ResourceManager\V2\SearchFoldersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v2.Folders/SearchFolders',
        $argument,
        ['\Google\Cloud\ResourceManager\V2\SearchFoldersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a Folder identified by the supplied resource name.
     * Valid Folder resource names have the format `folders/{folder_id}`
     * (for example, `folders/1234`).
     * The caller must have `resourcemanager.folders.get` permission on the
     * identified folder.
     * @param \Google\Cloud\ResourceManager\V2\GetFolderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetFolder(\Google\Cloud\ResourceManager\V2\GetFolderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v2.Folders/GetFolder',
        $argument,
        ['\Google\Cloud\ResourceManager\V2\Folder', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a Folder in the resource hierarchy.
     * Returns an Operation which can be used to track the progress of the
     * folder creation workflow.
     * Upon success the Operation.response field will be populated with the
     * created Folder.
     *
     * In order to succeed, the addition of this new Folder must not violate
     * the Folder naming, height or fanout constraints.
     * + The Folder's display_name must be distinct from all other Folder's that
     * share its parent.
     * + The addition of the Folder must not cause the active Folder hierarchy
     * to exceed a height of 4. Note, the full active + deleted Folder hierarchy
     * is allowed to reach a height of 8; this provides additional headroom when
     * moving folders that contain deleted folders.
     * + The addition of the Folder must not cause the total number of Folders
     * under its parent to exceed 100.
     *
     * If the operation fails due to a folder constraint violation,
     * a PreconditionFailure explaining the violation will be returned.
     * If the failure occurs synchronously then the PreconditionFailure
     * will be returned via the Status.details field and if it occurs
     * asynchronously then the PreconditionFailure will be returned
     * via the the Operation.error field.
     *
     * The caller must have `resourcemanager.folders.create` permission on the
     * identified parent.
     * @param \Google\Cloud\ResourceManager\V2\CreateFolderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateFolder(\Google\Cloud\ResourceManager\V2\CreateFolderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v2.Folders/CreateFolder',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a Folder, changing its display_name.
     * Changes to the folder display_name will be rejected if they violate either
     * the display_name formatting rules or naming constraints described in
     * the [CreateFolder] documentation.
     * + The Folder's display name must start and end with a letter or digit,
     * may contain letters, digits, spaces, hyphens and underscores and can be
     * no longer than 30 characters. This is captured by the regular expression:
     * [\p{L}\p{N}]({\p{L}\p{N}_- ]{0,28}[\p{L}\p{N}])?.
     * The caller must have `resourcemanager.folders.update` permission on the
     * identified folder.
     *
     * If the update fails due to the unique name constraint then a
     * PreconditionFailure explaining this violation will be returned
     * in the Status.details field.
     * @param \Google\Cloud\ResourceManager\V2\UpdateFolderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateFolder(\Google\Cloud\ResourceManager\V2\UpdateFolderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v2.Folders/UpdateFolder',
        $argument,
        ['\Google\Cloud\ResourceManager\V2\Folder', 'decode'],
        $metadata, $options);
    }

    /**
     * Moves a Folder under a new resource parent.
     * Returns an Operation which can be used to track the progress of the
     * folder move workflow.
     * Upon success the Operation.response field will be populated with the
     * moved Folder.
     * Upon failure, a FolderOperationError categorizing the failure cause will
     * be returned - if the failure occurs synchronously then the
     * FolderOperationError will be returned via the Status.details field
     * and if it occurs asynchronously then the FolderOperation will be returned
     * via the the Operation.error field.
     * In addition, the Operation.metadata field will be populated with a
     * FolderOperation message as an aid to stateless clients.
     * Folder moves will be rejected if they violate either the naming, height
     * or fanout constraints described in the [CreateFolder] documentation.
     * The caller must have `resourcemanager.folders.move` permission on the
     * folder's current and proposed new parent.
     * @param \Google\Cloud\ResourceManager\V2\MoveFolderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MoveFolder(\Google\Cloud\ResourceManager\V2\MoveFolderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v2.Folders/MoveFolder',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Requests deletion of a Folder. The Folder is moved into the
     * [DELETE_REQUESTED] state immediately, and is deleted approximately 30 days
     * later. This method may only be called on an empty Folder in the [ACTIVE]
     * state, where a Folder is empty if it doesn't contain any Folders or
     * Projects in the [ACTIVE] state.
     * The caller must have `resourcemanager.folders.delete` permission on the
     * identified folder.
     * @param \Google\Cloud\ResourceManager\V2\DeleteFolderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteFolder(\Google\Cloud\ResourceManager\V2\DeleteFolderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v2.Folders/DeleteFolder',
        $argument,
        ['\Google\Cloud\ResourceManager\V2\Folder', 'decode'],
        $metadata, $options);
    }

    /**
     * Cancels the deletion request for a Folder. This method may only be
     * called on a Folder in the [DELETE_REQUESTED] state.
     * In order to succeed, the Folder's parent must be in the [ACTIVE] state.
     * In addition, reintroducing the folder into the tree must not violate
     * folder naming, height and fanout constraints described in the
     * [CreateFolder] documentation.
     * The caller must have `resourcemanager.folders.undelete` permission on the
     * identified folder.
     * @param \Google\Cloud\ResourceManager\V2\UndeleteFolderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UndeleteFolder(\Google\Cloud\ResourceManager\V2\UndeleteFolderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v2.Folders/UndeleteFolder',
        $argument,
        ['\Google\Cloud\ResourceManager\V2\Folder', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the access control policy for a Folder. The returned policy may be
     * empty if no such policy or resource exists. The `resource` field should
     * be the Folder's resource name, e.g. "folders/1234".
     * The caller must have `resourcemanager.folders.getIamPolicy` permission
     * on the identified folder.
     * @param \Google\Cloud\Iam\V1\GetIamPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetIamPolicy(\Google\Cloud\Iam\V1\GetIamPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v2.Folders/GetIamPolicy',
        $argument,
        ['\Google\Cloud\Iam\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Sets the access control policy on a Folder, replacing any existing policy.
     * The `resource` field should be the Folder's resource name, e.g.
     * "folders/1234".
     * The caller must have `resourcemanager.folders.setIamPolicy` permission
     * on the identified folder.
     * @param \Google\Cloud\Iam\V1\SetIamPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetIamPolicy(\Google\Cloud\Iam\V1\SetIamPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v2.Folders/SetIamPolicy',
        $argument,
        ['\Google\Cloud\Iam\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns permissions that a caller has on the specified Folder.
     * The `resource` field should be the Folder's resource name,
     * e.g. "folders/1234".
     *
     * There are no permissions required for making this API call.
     * @param \Google\Cloud\Iam\V1\TestIamPermissionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TestIamPermissions(\Google\Cloud\Iam\V1\TestIamPermissionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v2.Folders/TestIamPermissions',
        $argument,
        ['\Google\Cloud\Iam\V1\TestIamPermissionsResponse', 'decode'],
        $metadata, $options);
    }

}

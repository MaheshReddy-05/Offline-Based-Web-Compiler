#include<bits/stdc++.h>
using namespace std;
 struct Node{
    int data;
    struct Node* left, *right;
     };
class Tree{
    public:
    Tree(){
      
    }
    
int maxDepth(struct Node* node)
{
    if (node == NULL)
        return 0;
    else {
        int lDepth = maxDepth(node->left);
        int rDepth = maxDepth(node->right);
 
        if (lDepth > rDepth)
            return (lDepth + 1);
        else
            return (rDepth + 1);
    }
}
    int left_height(Node* node)
{
    int ht = 0;
    while (node) {
        ht++;
        node = node->left;
    }
    // Return the left height obtained
    return ht;
}
  
// Function to get the right height
// of the binary tree
int right_height(Node* node)
{
    int ht = 0;
    while (node) {
        ht++;
        node = node->right;
    }
  
    // Return the right height obtained
    return ht;
}
  
// Function to get the count of nodes
// in complete binary tree
int TotalNodes(Node* root)
{
    // Base Case
    if (root == NULL)
        return 0;
    // Find the left height and the
    // right heights
    int lh = left_height(root);
    int rh = right_height(root);
    // If left and right heights are
    // equal return 2^height(1<<height) -1
    if (lh == rh)
        return (1 << lh) - 1;
    // Otherwise, recursive call
    return 1 + TotalNodes(root->left) + TotalNodes(root->right);
}

void printLevelOrder(struct Node* root)
{
    int h = height(root);
    int i;
    for (i = 1; i <= h; i++)
        printCurrentLevel(root, i);
}
 
/* Print nodes at a current level */
void printCurrentLevel(struct Node* root, int level)
{
    if (root == NULL)
        return;
    if (level == 1)
        printf("%d ", root->data);
    else if (level > 1) {
        printCurrentLevel(root->left, level - 1);
        printCurrentLevel(root->right, level - 1);
    }
}
 
/* Compute the "height" of a tree -- the number of
    nodes along the longest path from the root node
    down to the farthest leaf node.*/
int height(struct Node* node)
{
    if (node == NULL)
        return 0;
    else {
        /* compute the height of each subtree */
        int lheight = height(node->left);
        int rheight = height(node->right);
 
        /* use the larger one */
        if (lheight > rheight)
            return (lheight + 1);
        else
            return (rheight + 1);
    }
}
};
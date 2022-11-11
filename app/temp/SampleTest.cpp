#include<bits/stdc++.h>
#include "Node.h"
using namespace std;
struct Node* newNode(int data){
    struct Node* node = new Node;
    node->data = data;
    node->left = node->right = NULL;
    return (node);
}
int main(){
      
    struct Node *root = newNode(2);
    root->left     = newNode(7);
    root->right     = newNode(5);
    root->left->right = newNode(6);
    root->left->right->left = newNode(1);
    root->left->right->right = newNode(11);
    root->right->right = newNode(9);
    root->right->right->left = newNode(4);
    Tree tree; 
    // cout << tree.TotalNodes(root);
    // cout<< tree.maxDepth(root);
    cout<<tree.printLevelOrder(root);
    return 0;
}
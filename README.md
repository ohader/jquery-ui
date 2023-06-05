# (deprecated) jquery-ui integration for TYPO3 v12

⚠️ This extension won't be continued for TYPO3 v12.  It just serves as
drop-in replacement for `jquery-ui`, which has been removed form TYPO3 v12.

This extension provides the following JavaScript module import maps - like
in the TYPO3 v12 core, this does NOT include all modules of `jquery-ui`:

* `jquery-ui/core.js`
* `jquery-ui/draggable.js`
* `jquery-ui/droppable.js`
* `jquery-ui/mouse.js`
* `jquery-ui/position.js`
* `jquery-ui/resizable.js`
* `jquery-ui/selectable.js`
* `jquery-ui/sortable.js`
* `jquery-ui/widget.js`

## Setup

### Via Composer

```
composer req @friendsoftypo3/jquery-ui
```

### As Git Clone

```
cd typo3conf/ext/
# git clone https://github.com/friendsoftypo3/jquery-ui.git jquery_ui
git clone https://github.com/ohader/jquery-ui.git jquery_ui
```

### Via TYPO3 Extension Repository (TER)

...

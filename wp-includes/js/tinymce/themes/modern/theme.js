(function () {
var modern = (function (domGlobals) {
    'use strict';

    var global = tinymce.util.Tools.resolve('tinymce.ThemeManager');

    var global$1 = tinymce.util.Tools.resolve('tinymce.EditorManager');

    var global$2 = tinymce.util.Tools.resolve('tinymce.util.Tools');

    var isBrandingEnabled = function (editor) {
      return editor.getParam('branding', true, 'boolean');
    };
    var hasMenubar = function (editor) {
      return getMenubar(editor) !== false;
    };
    var getMenubar = function (editor) {
      return editor.getParam('menubar');
    };
    var hasStatusbar = function (editor) {
      return editor.getParam('statusbar', true, 'boolean');
    };
    var getToolbarSize = function (editor) {
      return editor.getParam('toolbar_items_size');
    };
    var isReadOnly = function (editor) {
      return editor.getParam('readonly', false, 'boolean');
    };
    var getFixedToolbarContainer = function (editor) {
      return editor.getParam('fixed_toolbar_container');
    };
    var getInlineToolbarPositionHandler = function (editor) {
      return editor.getParam('inline_toolbar_position_handler');
    };
    var getMenu = function (editor) {
      return editor.getParam('menu');
    };
    var getRemovedMenuItems = function (editor) {
      return editor.getParam('removed_menuitems', '');
    };
    var getMinWidth = function (editor) {
      return editor.getParam('min_width', 100, 'number');
    };
    var getMinHeight = function (editor) {
      return editor.getParam('min_height', 100, 'number');
    };
    var getMaxWidth = function (editor) {
      return editor.getParam('max_width', 65535, 'number');
    };
    var getMaxHeight = function (editor) {
      return editor.getParam('max_height', 65535, 'number');
    };
    var isSkinDisabled = function (editor) {
      return editor.settings.skin === false;
    };
    var isInline = function (editor) {
      return editor.getParam('inline', false, 'boolean');
    };
    var getResize = function (editor) {
      var resize = editor.getParam('resize', 'vertical');
      if (resize === false) {
        return 'none';
      } else if (resize === 'both') {
        return 'both';
      } else {
        return 'vertical';
      }
    };
    var getSkinUrl = function (editor) {
      var settings = editor.settings;
      var skin = settings.skin;
      var skinUrl = settings.skin_url;
      if (skin !== false) {
        var skinName = skin ? skin : 'lightgray';
        if (skinUrl) {
          skinUrl = editor.documentBaseURI.toAbsolute(skinUrl);
        } else {
          skinUrl = global$1.baseURL + '/skins/' + skinName;
        }
      }
      return skinUrl;
    };
    var getIndexedToolbars = function (settings, defaultToolbar) {
      var toolbars = [];
      for (var i = 1; i < 10; i++) {
        var toolbar = settings['toolbar' + i];
        if (!toolbar) {
          break;
        }
        toolbars.push(toolbar);
      }
      var mainToolbar = settings.toolbar ? [settings.toolbar] : [defaultToolbar];
      return toolbars.length > 0 ? toolbars : mainToolbar;
    };
    var getToolbars = function (editor) {
      var toolbar = editor.getParam('toolbar');
      var defaultToolbar = 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image';
      if (toolbar === false) {
        return [];
      } else if (global$2.isArray(toolbar)) {
        return global$2.grep(toolbar, function (toolbar) {
          return toolbar.length > 0;
        });
      } else {
        return getIndexedToolbars(editor.settings, defaultToolbar);
      }
    };

    var global$3 = tinymce.util.Tools.resolve('tinymce.dom.DOMUtils');

    var global$4 = tinymce.util.Tools.resolve('tinymce.ui.Factory');

    var global$5 = tinymce.util.Tools.resolve('tinymce.util.I18n');

    var fireSkinLoaded = function (editor) {
      return editor.fire('SkinLoaded');
    };
    var fireResizeEditor = function (editor) {
      return editor.fire('ResizeEditor');
    };
    var fireBeforeRenderUI = function (editor) {
      return editor.fire('BeforeRenderUI');
    };
    var Events = {
      fireSkinLoaded: fireSkinLoaded,
      fireResizeEditor: fireResizeEditor,
      fireBeforeRenderUI: fireBeforeRenderUI
    };

    var focus = function (panel, type) {
      return function () {
        var item = panel.find(type)[0];
        if (item) {
          item.focus(true);
        }
      };
    };
    var addKeys = function (editor, panel) {
      editor.shortcuts.add('Alt+F9', '', focus(panel, 'menubar'));
      editor.shortcuts.add('Alt+F10,F10', '', focus(panel, 'toolbar'));
      editor.shortcuts.add('Alt+F11', '', focus(panel, 'elementpath'));
      panel.on('cancel', function () {
        editor.focus();
      });
    };
    var A11y = { addKeys: addKeys };

    var global$6 = tinymce.util.Tools.resolve('tinymce.geom.Rect');

    var global$7 = tinymce.util.Tools.resolve('tinymce.util.Delay');

    var noop = function () {
      var args = [];
      for (var _i = 0; _i < arguments.length; _i++) {
        args[_i] = arguments[_i];
      }
    };
    var constant = function (value) {
      return function () {
        return value;
      };
    };
    var never = constant(false);
    var always = constant(true);

    var never$1 = never;
    var always$1 = always;
    var none = function () {
      return NONE;
    };
    var NONE = function () {
      var eq = function (o) {
        return o.isNone();
      };
      var call = function (thunk) {
        return thunk();
      };
      var id = function (n) {
        return n;
      };
      var noop = function () {
      };
      var nul = function () {
        return null;
      };
      var undef = function () {
        return undefined;
      };
      var me = {
        fold: function (n, s) {
          return n();
        },
        is: never$1,
        isSome: never$1,
        isNone: always$1,
        getOr: id,
        getOrThunk: call,
        getOrDie: function (msg) {
          throw new Error(msg || 'error: getOrDie called on none.');
        },
        getOrNull: nul,
        getOrUndefined: undef,
        or: id,
        orThunk: call,
        map: none,
        ap: none,
        each: noop,
        bind: none,
        flatten: none,
        exists: never$1,
        forall: always$1,
        filter: none,
        equals: eq,
        equals_: eq,
        toArray: function () {
          return [];
        },
        toString: constant('none()')
      };
      if (Object.freeze)
        Object.freeze(me);
      return me;
    }();
    var some = function (a) {
      var constant_a = function () {
        return a;
      };
      var self = function () {
        return me;
      };
      var map = function (f) {
        return some(f(a));
      };
      var bind = function (f) {
        return f(a);
      };
      var me = {
        fold: function (n, s) {
          return s(a);
        },
        is: function (v) {
          return a === v;
        },
        isSome: always$1,
        isNone: never$1,
        getOr: constant_a,
        getOrThunk: constant_a,
        getOrDie: constant_a,
        getOrNull: constant_a,
        getOrUndefined: constant_a,
        or: self,
        orThunk: self,
        map: map,
        ap: function (optfab) {
          return optfab.fold(none, function (fab) {
            return some(fab(a));
          });
        },
        each: function (f) {
          f(a);
        },
        bind: bind,
        flatten: constant_a,
        exists: bind,
        forall: bind,
        filter: function (f) {
          return f(a) ? me : NONE;
        },
        equals: function (o) {
          return o.is(a);
        },
        equals_: function (o, elementEq) {
          return o.fold(never$1, function (b) {
            return elementEq(a, b);
          });
        },
        toArray: function () {
          return [a];
        },
        toString: function () {
          return 'some(' + a + ')';
        }
      };
      return me;
    };
    var from = function (value) {
      return value === null || value === undefined ? NONE : some(value);
    };
    var Option = {
      some: some,
      none: none,
      from: from
    };

    var getUiContainerDelta = function (ctrl) {
      var uiContainer = getUiContainer(ctrl);
      if (uiContainer && global$3.DOM.getStyle(uiContainer, 'position', true) !== 'static') {
        var containerPos = global$3.DOM.getPos(uiContainer);
        var dx = uiContainer.scrollLeft - containerPos.x;
        var dy = uiContainer.scrollTop - containerPos.y;
        return Option.some({
          x: dx,
          y: dy
        });
      } else {
        return Option.none();
      }
    };
    var setUiContainer = function (editor, ctrl) {
      var uiContainer = global$3.DOM.select(editor.settings.ui_container)[0];
      ctrl.getRoot().uiContainer = uiContainer;
    };
    var getUiContainer = function (ctrl) {
      return ctrl ? ctrl.getRoot().uiContainer : null;
    };
    var inheritUiContainer = function (fromCtrl, toCtrl) {
      return toCtrl.uiContainer = getUiContainer(fromCtrl);
    };
    var UiContainer = {
      getUiContainerDelta: getUiContainerDelta,
      setUiContainer: setUiContainer,
      getUiContainer: getUiContainer,
      inheritUiContainer: inheritUiContainer
    };

    var createToolbar = function (editor, items, size) {
      var toolbarItems = [];
      var buttonGroup;
      if (!items) {
        return;
      }
      global$2.each(items.split(/[ ,]/), function (item) {
        var itemName;
        var bindSelectorChanged = function () {
          var selection = editor.selection;
          if (item.settings.stateSelector) {
            selection.selectorChanged(item.settings.stateSelector, function (state) {
              item.active(state);
            }, true);
          }
          if (item.settings.disabledStateSelector) {
            selection.selectorChanged(item.settings.disabledStateSelector, function (state) {
              item.disabled(state);
            });
          }
        };
        if (item === '|') {
          buttonGroup = null;
        } else {
          if (!buttonGroup) {
            buttonGroup = {
              type: 'buttongroup',
              items: []
            };
            toolbarItems.push(buttonGroup);
          }
          if (editor.buttons[item]) {
            itemName = item;
            item = editor.buttons[itemName];
            if (typeof item === 'function') {
              item = item();
            }
            item.type = item.type || 'button';
            item.size = size;
            item = global$4.create(item);
            buttonGroup.items.push(item);
            if (editor.initialized) {
              bindSelectorChanged();
            } else {
              editor.on('init', bindSelectorChanged);
            }
          }
        }
      });
      return {
        type: 'toolbar',
        layout: 'flow',
        items: toolbarItems
      };
    };
    var createToolbars = function (editor, size) {
      var toolbars = [];
      var addToolbar = function (items) {
        if (items) {
          toolbars.push(createToolbar(editor, items, size));
        }
      };
      global$2.each(getToolbars(editor), function (toolbar) {
        addToolbar(toolbar);
      });
      if (toolbars.length) {
        return {
          type: 'panel',
          layout: 'stack',
          classes: 'toolbar-grp',
          ariaRoot: true,
          ariaRemember: true,
          items: toolbars
        };
      }
    };
    var Toolbar = {
      createToolbar: createToolbar,
      createToolbars: createToolbars
    };

    var DOM = global$3.DOM;
    var toClientRect = function (geomRect) {
      return {
        left: geomRect.x,
        top: geomRect.y,
        width: geomRect.w,
        height: geomRect.h,
        right: geomRect.x + geomRect.w,
        bottom: geomRect.y + geomRect.h
      };
    };
    var hideAllFloatingPanels = function (editor) {
      global$2.each(editor.contextToolbars, function (toolbar) {
        if (toolbar.panel) {
          toolbar.panel.hide();
        }
      });
    };
    var movePanelTo = function (panel, pos) {
      panel.moveTo(pos.left, pos.top);
    };
    var togglePositionClass = function (panel, relPos, predicate) {
      relPos = relPos ? relPos.substr(0, 2) : '';
      global$2.each({
        t: 'down',
        b: 'up'
      }, function (cls, pos) {
        panel.classes.toggle('arrow-' + cls, predicate(pos, relPos.substr(0, 1)));
      });
      global$2.each({
        l: 'left',
        r: 'right'
      }, function (cls, pos) {
        panel.classes.toggle('arrow-' + cls, predicate(pos, relPos.substr(1, 1)));
      });
    };
    var userConstrain = function (handler, x, y, elementRect, contentAreaRect, panelRect) {
      panelRect = toClientRect({
        x: x,
        y: y,
        w: panelRect.w,
        h: panelRect.h
      });
      if (handler) {
        panelRect = handler({
          elementRect: toClientRect(elementRect),
          contentAreaRect: toClientRect(contentAreaRect),
          panelRect: panelRect
        });
      }
      return panelRect;
    };
    var addContextualToolbars = function (editor) {
      var scrollContainer;
      var getContextToolbars = function () {
        return editor.contextToolbars || [];
      };
      var getElementRect = function (elm) {
        var pos, targetRect, root;
        pos = DOM.getPos(editor.getContentAreaContainer());
        targetRect = editor.dom.getRect(elm);
        root = editor.dom.getRoot();
        if (root.nodeName === 'BODY') {
          targetRect.x -= root.ownerDocument.documentElement.scrollLeft || root.scrollLeft;
          targetRect.y -= root.ownerDocument.documentElement.scrollTop || root.scrollTop;
        }
        targetRect.x += pos.x;
        targetRect.y += pos.y;
        return targetRect;
      };
      var reposition = function (match, shouldShow) {
        var relPos, panelRect, elementRect, contentAreaRect, panel, relRect, testPositions, smallElementWidthThreshold;
        var handler = getInlineToolbarPositionHandler(editor);
        if (editor.removed) {
          return;
        }
        if (!match || !match.toolbar.panel) {
          hideAllFloatingPanels(editor);
          return;
        }
        testPositions = [
          'bc-tc',
          'tc-bc',
          'tl-bl',
          'bl-tl',
          'tr-br',
          'br-tr'
        ];
        panel = match.toolbar.panel;
        if (shouldShow) {
          panel.show();
        }
        elementRect = getElementRect(match.element);
        panelRect = DOM.getRect(panel.getEl());
        contentAreaRect = DOM.getRect(editor.getContentAreaContainer() || editor.getBody());
        var delta = UiContainer.getUiContainerDelta(panel).getOr({
          x: 0,
          y: 0
        });
        elementRect.x += delta.x;
        elementRect.y += delta.y;
        panelRect.x += delta.x;
        panelRect.y += delta.y;
        contentAreaRect.x += delta.x;
        contentAreaRect.y += delta.y;
        smallElementWidthThreshold = 25;
        if (DOM.getStyle(match.element, 'display', true) !== 'inline') {
          var clientRect = match.element.getBoundingClientRect();
          elementRect.w = clientRect.width;
          elementRect.h = clientRect.height;
        }
        if (!editor.inline) {
          contentAreaRect.w = editor.getDoc().documentElement.offsetWidth;
        }
        if (editor.selection.controlSelection.isResizable(match.element) && elementRect.w < smallElementWidthThreshold) {
          elementRect = global$6.inflate(elementRect, 0, 8);
        }
        relPos = global$6.findBestRelativePosition(panelRect, elementRect, contentAreaRect, testPositions);
        elementRect = global$6.clamp(elementRect, contentAreaRect);
        if (relPos) {
          relRect = global$6.relativePosition(panelRect, elementRect, relPos);
          movePanelTo(panel, userConstrain(handler, relRect.x, relRect.y, elementRect, contentAreaRect, panelRect));
        } else {
          contentAreaRect.h += panelRect.h;
          elementRect = global$6.intersect(contentAreaRect, elementRect);
          if (elementRect) {
            relPos = global$6.findBestRelativePosition(panelRect, elementRect, contentAreaRect, [
              'bc-tc',
              'bl-tl',
              'br-tr'
            ]);
            if (relPos) {
              relRect = global$6.relativePosition(panelRect, elementRect, relPos);
              movePanelTo(panel, userConstrain(handler, relRect.x, relRect.y, elementRect, contentAreaRect, panelRect));
            } else {
              movePanelTo(panel, userConstrain(handler, elementRect.x, elementRect.y, elementRect, contentAreaRect, panelRect));
            }
          } else {
            panel.hide();
          }
        }
        togglePositionClass(panel, relPos, function (pos1, pos2) {
          return pos1 === pos2;
        });
      };
      var repositionHandler = function (show) {
        return function () {
          var execute = function () {
            if (editor.selection) {
              reposition(findFrontMostMatch(editor.selection.getNode()), show);
            }
          };
          global$7.requestAnimationFrame(execute);
        };
      };
      var bindScrollEvent = function (panel) {
        if (!scrollContainer) {
          var reposition_1 = repositionHandler(true);
          var uiContainer_1 = UiContainer.getUiContainer(panel);
          scrollContainer = editor.selection.getScrollContainer() || editor.getWin();
          DOM.bind(scrollContainer, 'scroll', reposition_1);
          DOM.bind(uiContainer_1, 'scroll', reposition_1);
          editor.on('remove', function () {
            DOM.unbind(scrollContainer, 'scroll', reposition_1);
            DOM.unbind(uiContainer_1, 'scroll', reposition_1);
          });
        }
      };
      var showContextToolbar = function (match) {
        var panel;
        if (match.toolbar.panel) {
          match.toolbar.panel.show();
          reposition(match);
          return;
        }
        panel = global$4.create({
          type: 'floatpanel',
          role: 'dialog',
          classes: 'tinymce tinymce-inline arrow',
          ariaLabel: 'Inline toolbar',
          layout: 'flex',
          direction: 'column',
          align: 'stretch',
          autohide: false,
          autofix: true,
          fixed: true,
          border: 1,
          items: Toolbar.createToolbar(editor, match.toolbar.items),
          oncancel: function () {
            editor.focus();
          }
        });
        UiContainer.setUiContainer(editor, panel);
        bindScrollEvent(panel);
        match.toolbar.panel = panel;
        panel.renderTo().reflow();
        reposition(match);
      };
      var hideAllContextToolbars = function () {
        global$2.each(getContextToolbars(), function (toolbar) {
          if (toolbar.panel) {
            toolbar.panel.hide();
          }
        });
      };
      var findFrontMostMatch = function (targetElm) {
        var i, y, parentsAndSelf;
        var toolbars = getContextToolbars();
        parentsAndSelf = editor.$(targetElm).parents().add(targetElm);
        for (i = parentsAndSelf.length - 1; i >= 0; i--) {
          for (y = toolbars.length - 1; y >= 0; y--) {
            if (toolbars[y].predicate(parentsAndSelf[i])) {
              return {
                toolbar: toolbars[y],
                element: parentsAndSelf[i]
              };
            }
          }
        }
        return null;
      };
      editor.on('click keyup setContent ObjectResized', function (e) {
        if (e.type === 'setcontent' && !e.selection) {
          return;
        }
        global$7.setEditorTimeout(editor, function () {
          var match;
          match = findFrontMostMatch(editor.selection.getNode());
          if (match) {
            hideAllContextToolbars();
            showContextToolbar(match);
          } else {
            hideAllContextToolbars();
          }
        });
      });
      editor.on('blur hide contextmenu', hideAllContextToolbars);
      editor.on('ObjectResizeStart', function () {
        var match = findFrontMostMatch(editor.selection.getNode());
        if (match && match.toolbar.panel) {
          match.toolbar.panel.hide();
        }
      });
      editor.on('ResizeEditor ResizeWindow', repositionHandler(true));
      editor.on('nodeChange', repositionHandler(false));
      editor.on('remove', function () {
        global$2.each(getContextToolbars(), function (toolbar) {
          if (toolbar.panel) {
            toolbar.panel.remove();
          }
        });
        editor.contextToolbars = {};
      });
      editor.shortcuts.add('ctrl+F9', '', function () {
        var match = findFrontMostMatch(editor.selection.getNode());
        if (match && match.toolbar.panel) {
          match.toolbar.panel.items()[0].focus();
        }
      });
    };
    var ContextToolbars = { addContextualToolbars: addContextualToolbars };

    var typeOf = function (x) {
      if (x === null)
        return 'null';
      var t = typeof x;
      if (t === 'object' && Array.prototype.isPrototypeOf(x))
        return 'array';
      if (t === 'object' && String.prototype.isPrototypeOf(x))
        return 'string';
      return t;
    };
    var isType = function (type) {
      return function (value) {
        return typeOf(value) === type;
      };
    };
    var isFunction = isType('function');
    var isNumber = isType('number');

    var rawIndexOf = function () {
      var pIndexOf = Array.prototype.indexOf;
      var fastIndex = function (xs, x) {
        return pIndexOf.call(xs, x);
      };
      var slowIndex = function (xs, x) {
        return slowIndexOf(xs, x);
      };
      return pIndexOf === undefined ? slowIndex : fastIndex;
    }();
    var indexOf = function (xs, x) {
      var r = rawIndexOf(xs, x);
      return r === -1 ? Option.none() : Option.some(r);
    };
    var exists = function (xs, pred) {
      return findIndex(xs, pred).isSome();
    };
    var map = function (xs, f) {
      var len = xs.length;
      var r = new Array(len);
      for (var i = 0; i < len; i++) {
        var x = xs[i];
        r[i] = f(x, i, xs);
      }
      return r;
    };
    var each = function (xs, f) {
      for (var i = 0, len = xs.length; i < len; i++) {
        var x = xs[i];
        f(x, i, xs);
      }
    };
    var filter = function (xs, pred) {
      var r = [];
      for (var i = 0, len = xs.length; i < len; i++) {
        var x = xs[i];
        if (pred(x, i, xs)) {
          r.push(x);
        }
      }
      return r;
    };
    var foldl = function (xs, f, acc) {
      each(xs, function (x) {
        acc = f(acc, x);
      });
      return acc;
    };
    var find = function (xs, pred) {
      for (var i = 0, len = xs.length; i < len; i++) {
        var x = xs[i];
        if (pred(x, i, xs)) {
          return Option.some(x);
        }
      }
      return Option.none();
    };
    var findIndex = function (xs, pred) {
      for (var i = 0, len = xs.length; i < len; i++) {
        var x = xs[i];
        if (pred(x, i, xs)) {
          return Option.some(i);
        }
      }
      return Option.none();
    };
    var slowIndexOf = function (xs, x) {
      for (var i = 0, len = xs.length; i < len; ++i) {
        if (xs[i] === x) {
          return i;
        }
      }
      return -1;
    };
    var push = Array.prototype.push;
    var flatten = function (xs) {
      var r = [];
      for (var i = 0, len = xs.length; i < len; ++i) {
        if (!Array.prototype.isPrototypeOf(xs[i]))
          throw new Error('Arr.flatten item ' + i + ' was not an array, input: ' + xs);
        push.apply(r, xs[i]);
      }
      return r;
    };
    var slice = Array.prototype.slice;
    var from$1 = isFunction(Array.from) ? Array.from : function (x) {
      return slice.call(x);
    };

    var defaultMenus = {
      file: {
        title: 'File',
        items: 'newdocument restoredraft | preview | print'
      },
      edit: {
        title: 'Edit',
        items: 'undo redo | cut copy paste pastetext | selectall'
      },
      view: {
        title: 'View',
        items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen'
      },
      insert: {
        title: 'Insert',
        items: 'image link media template codesample inserttable | charmap hr | pagebr
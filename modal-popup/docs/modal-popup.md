# Modal Popup - Quix Element

The Modal Popup element (Quix) lets you show rich content in a popup with flexible triggers and full styling control. You can load content from Custom fields or from a Quix Template. Choose two layouts: Classic (split primary content and text) or Cover (use the image as a background with content overlay). Primary content supports Image, Video (YouTube, Vimeo, Dailymotion auto-embed), or Map (Google Maps by address, view, zoom). You can optionally hide general content to display only the primary media.

It offers versatile triggers: Button click, Image click, Delay (after milliseconds), Scroll (at a set percentage), and Exit Intent (before leaving page, with delay and cooldown). You can position the modal Center or at a Custom corner/edge (left/center/right × top/center/bottom). Closing is flexible too: default/outer close button, optional disable of outside/ESC close, plus a “close button delay” message or auto-close countdown.

Styling: overlay and modal backgrounds, border, width, min height, alignment, padding; media sizing and radius; text colors/typography/spacing; internal CTA button styles; and separate trigger styling for both button and image. Benefits: easy setup, multiple trigger scenarios, improved engagement with timed/exit-intent popups, accessible alt text, and clean, responsive presentation without custom code.


Key benefits:
- Engage users with the right timing (delay, scroll, exit intent).
- Reuse saved designs via templates or build quickly with custom fields.
- Present media-rich content (image, video, map) with simple controls.
- Keep brand consistency with typography, color, spacing, and borders.
- Improve accessibility and SEO using Alt Text and semantic tags.

---

## How to Add a Modal Popup
1. Open the builder and add the “Modal Popup” element to your desired section.
2. In Source, choose:
   - Custom: configure all content and styles within the element.
   - Templates: render a saved Quix template inside the modal (so you can do anything via Quix all elements).
3. For builder, you can enable/disable preview using “Disable Modal Preview.”

---

## Settings Overview
A Modal consists of two parts:
- Selector (Handle): The element that opens the modal (button, image, or automatic triggers).
- Popup (Content): The content and layout shown inside the modal.

You can also configure Modal Position and Close Behavior, then style everything in detail.

---

## Selector (Handle)
Choose a trigger method under “Trigger Option → Methods.”

### Button
- Button Text: label shown on the trigger button.
- Button Color Type: Primary, Secondary, Success, Danger, Warning, Info, Light, Dark, Link.
- Outline: toggle to make an outline style.
- Icon: choose an icon and set Icon placement (Left/Right).
- Full Width: expand the button to the full width of its container.
- Text Alignment: set alignment (Left/Center/Right) for full-width buttons.

Styling (Button Options):
- Alignment: alignment of the button inside its column.
- Padding: spacing inside the button.
- Background: normal/hover backgrounds (flat/gradient).
- Border: width, style, color, radius.
- Typography: font family, size, weight, transform, etc.
- Text & Icon Color: normal and hover colors, plus hover Icon color.
- Icon Spacing: distance between icon and text.

### Image
- Image: select the image that users click to open the modal.
- Alt Text: improve accessibility and SEO.
- Alignment: Left/Center/Right.

Styling (Image Options):
- Image Width (px), Padding, Border, Border Radius.
- Built-in hover opacity transition for a subtle effect.

### Delay
- Delay Time (ms): automatically open the modal after a delay.

### Scroll
- Position (0–100): show the modal when the user scrolls to a percentage of the page. Uses IntersectionObserver when available.

### Before Leave (Exit Intent)
- Exit Intent Delay (ms): wait this long before showing the modal after exit intent.
- Cooldown Period (minutes): don’t show again within this time window (uses localStorage).

---

## Popup (Content)

### Source
- Custom: configure everything within the element.
- Templates: select a Quix Template to render inside the modal. Builder-specific UI padding and borders are automatically neutralized for a clean render.

### Layout
- Classic: primary media (image/video/map) plus content (title, subtitle, text, CTA).
- Cover: use the selected image as the background; content overlays it.

### Primary Content (Classic)
- Primary Content Type: Image, Video Link, or Map.
- Image: select “Featured Image” and set “Alt Text.”
- Video Link: paste a YouTube, Vimeo, or Dailymotion URL; it is auto-converted to an embeddable URL.
- Map: set Address (location), View (Map/Hybrid/Satellite/Terrain), and Zoom.
- Content Width/Height (px): control media size; map/video keep responsive behavior unless heights are fixed.
- Content Alignment: left/center/right alignment of the media.
- Content Radius: corner radius applied to primary media.
- Primary Content Position (Classic only): Left/Right/Top/Bottom relative to the text content.
- Show Primary Content only (Classic): hides titles, subtitle, text, and CTA.

### General Content
- Title and Subtitle: add and format your headings.
- Enable Content: toggle the main content body.
- Content: rich text editor area.
- Content Image: optional image with Alt Text; choose Vertical Position (Top/Bottom) and Horizontal Alignment (Left/Center/Right) in Styles.
- Internal CTA Button: enable, set Text, Type (style), and Link.

### Markup
- Title HTML Tag: choose H1–H6 for the main title.
- Subtitle HTML Tag: choose H1–H6 for the subtitle.

### Close Behavior
- Close Button Type: Default (in-header) or Outside (outside content).
- Close on Outside Click: allow background click and ESC to close (toggle off to prevent it).
- Close Button Delay: hide the close button initially; show after X seconds. You can customize the message and it supports {seconds} placeholder.
- Auto Close: close the modal automatically after X seconds; message supports {seconds} placeholder.
- Important: Close Button Delay and Auto Close are mutually exclusive.

### Modal Position
- Modal Position: Center (default) or Custom Position.
- If Custom: Horizontal (Left/Center/Right) and Vertical (Top/Center/Bottom). The dialog is positioned with fixed coordinates and smart transforms.

---

## Styling

### Modal Options
- Modal Overlay Background: color of the backdrop when the modal is open.
- Modal Background: background for the dialog/wrapper (supports gradients, etc.).
- Modal Border: border controls for the dialog.
- Height: Default or Min Height (set your minimum height).
- Modal Width (%): responsive width of the dialog.
- Alignment: alignment of the inner content wrapper.
- Padding: inner spacing of the content wrapper.

### Primary Content Styles (Classic)
- Width, Min Height, Alignment of primary media.
- Primary Content Border Radius: round corners of the entire modal wrapper for both Classic and Cover.

### Content Image Styles
- Width/Height of the content image.
- Object Fit (Fill/Contain/Cover/None/Scale-down).
- Horizontal Alignment (Left/Center/Right) and Vertical Position (Top/Bottom).
- Spacing and Border Radius.

### Typography
- Title: Color, Hover Color, Spacing, Typography.
- Subtitle: Color, Hover Color, Spacing, Typography.
- Description: Color, Hover Color, Spacing, Typography.

### Internal Button Styles (inside modal content)
- Background, Border, Typography, Text Color, Hover Color, Padding.

### Trigger Button Styles (selector)
- Alignment, Padding, Background, Border, Typography.
- Text Color, Hover Text Color, Hover Icon Color.
- Icon Spacing.

### Trigger Image Styles (selector)
- Image Width, Padding, Border, Border Radius.
- Hover opacity transition.

---

## Behavior Notes
- Video URLs are auto-normalized for YouTube, Vimeo, and Dailymotion embed links.
- Scroll trigger uses IntersectionObserver when supported; falls back to scroll checks.
- Exit Intent watches link clicks and reload key combos (Ctrl/Cmd+R), shows the modal, and then continues navigation/reload. Cooldown prevents frequent re-showing.
- When using Templates as content source, builder-specific wrappers are stripped from the modal area to avoid unwanted padding/borders.
- “Close on outside click” deactivates ESC and backdrop closing when disabled.

---

## Accessibility & SEO
- Always provide Alt Text for Featured Image, Trigger Image, and Content Image.
- Choose semantic Title/Subtitle tags (H1–H6) that fit your page hierarchy.
- For keyboard users, keep outside/ESC close enabled unless there’s a specific reason.

---

## Tips & Best Practices
- Use Delay + Exit Intent thoughtfully—avoid showing too often (set a reasonable cooldown).
- Keep modal width comfortable on mobile (e.g., 90%) and reduce padding on phones.
- For videos, rely on responsive defaults unless you truly need fixed heights.
- Use “Show Primary Content only” for clean media-only popups.


---

## FAQ
- The modal doesn’t open on scroll — what am I missing?
  - Ensure Position is set between 0–100. On very short pages, consider Delay or Button.
- The close button isn’t visible.
  - If “Close Button Delay” is enabled, it will show after the countdown ends.
- The modal reappears too often with Exit Intent.
  - Increase the cooldown period in minutes.
- My video looks letterboxed.
  - Let it use the default responsive aspect ratio, or set a custom height and consider Content Radius.

---

## Field Reference (Quick Map)
- Source: Custom | Templates; Disable Modal Preview.
- Layout: Classic | Cover; Show Primary Content only (Classic).
- Primary Content: Image | Video Link | Map; Width/Height; Align; Radius; Position (Classic).
- General Content: Title; Subtitle; Enable Content; Content; Content Image (+ Alt); Internal Button (Enable, Text, Type, Link).
- Markup: Title HTML Tag; Subtitle HTML Tag.
- Trigger Methods: Button (Text, Type, Outline, Icon, Placement, Full Width, Text Align), Image (Alt, Align), Delay (ms), Scroll (0–100), Before Leave (Delay, Cooldown).
- Modal Position: Center | Custom (Horizontal: Left/Center/Right; Vertical: Top/Center/Bottom).
- Close Behavior: Close Button Type (Default/Outside); Close on Outside Click; Close Button Delay (sec, message); Auto Close (sec, message).
- Styles → Modal Options: Overlay Background; Modal Background; Border; Min Height; Width (%); Alignment; Padding.
- Styles → Primary Content: Width; Min Height; Alignment; Primary Content Border Radius.
- Styles → Content Image: Width/Height; Object Fit; Horizontal Align; Vertical Position; Spacing; Border Radius.
- Styles → Typography: Title/Sub/Description color, hover, spacing, typography.
- Styles → Internal Button: Background; Border; Typography; Text/Hover Color; Padding.
- Styles → Trigger Button: Alignment; Padding; Background; Border; Typography; Text/Hover/Icon colors; Icon Spacing.
- Styles → Trigger Image: Width; Padding; Border; Border Radius.

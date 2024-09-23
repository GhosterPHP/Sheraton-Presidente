<?php
function render360Viewer($id, $imagePath) {
    ob_start();
    ?>
    <div id="<?php echo $id; ?>" class="viewer"></div>
    <script type="importmap">
        {
            "imports": {
                "three": "https://cdn.jsdelivr.net/npm/three@0.168.0/build/three.module.js",
                "OrbitControls": "https://cdn.jsdelivr.net/npm/three@0.168.0/examples/jsm/controls/OrbitControls.js"
            }
        }
    </script>
    <script type="module">
        import * as THREE from 'three';
        import { OrbitControls } from 'OrbitControls';

        const width = 800, height = 800;
        const div = document.getElementById('<?php echo $id; ?>');
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, width / height, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer();
        renderer.setSize(width, height);
        div.appendChild(renderer.domElement);

        const geometry = new THREE.SphereGeometry(500, 60, 40);
        geometry.scale(-1, 1, 1);
        const texture = new THREE.TextureLoader().load("<?php echo $imagePath; ?>");
        const material = new THREE.MeshBasicMaterial({ map: texture });
        const sphere = new THREE.Mesh(geometry, material);
        scene.add(sphere);

        const controls = new OrbitControls(camera, renderer.domElement);
        controls.enableZoom = false;
        controls.enablePan = false;
        controls.rotateSpeed = -0.25;
        camera.position.set(0, 0, 0.1);

        const animate = () => {
            requestAnimationFrame(animate);
            controls.update();
            renderer.render(scene, camera);
        };
        animate();

        window.addEventListener('resize', () => {
            camera.aspect = width / height;
            camera.updateProjectionMatrix();
            renderer.setSize(width, height);
        });
    </script>
    <?php
    return ob_get_clean();
}
?>
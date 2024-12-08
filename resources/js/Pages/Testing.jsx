import AppLayout from '@/Layouts/AppLayout';

export default function testing() {
    return <div>This is testing. Lorem ipsum dolor sit amet consectetur.</div>;
}

testing.layout = (page) => <AppLayout children={page} title={'Testing'} />;
